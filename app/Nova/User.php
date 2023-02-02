<?php

namespace App\Nova;

use App\Models\MainOffer;
use App\Models\UsageCharge;
use App\Nova\Filters\InstallStoreFilter;
use App\Nova\Filters\StoreType;
use App\Nova\Filters\UserSubscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\User';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email', 'store_type'
    ];

    public static function indexQuery(NovaRequest $request, $query)
    {
        /*
         * custom sorting
         */
        if ($request->get('orderBy') == 'total_offers') {
            $query->join('store_users', 'store_users.user_id', '=', 'users.id')
                ->join('main_offers', 'main_offers.store_id', '=', 'store_users.store_id')
                ->addSelect('users.id')
                ->addSelect('users.name')
                ->addSelect('users.email')
                ->addSelect('users.store_type')
                ->addSelect('store_users.store_id')
                ->addSelect(\DB::raw("COUNT(main_offers.id) AS total_offers"))
                ->groupBy('users.id');
        }
        if ($request->get('orderBy') == 'total_amount') {
            $query->join('store_users', 'store_users.user_id', '=', 'users.id')
                ->join('main_offers', 'main_offers.store_id', '=', 'store_users.store_id')
                ->join('offer_repport_cart', 'offer_repport_cart.main_offer_id', '=', 'main_offers.id')
                ->addSelect('users.id')
                ->addSelect('users.name')
                ->addSelect('users.email')
                ->addSelect('users.store_type')
                ->addSelect('store_users.store_id')
                ->addSelect(\DB::raw("SUM(offer_repport_cart.ammount) AS total_amount"))
                ->groupBy('users.id');
        }

        return $query;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $fields[] = ID::make()->sortable();
        $fields[] = Text::make('Name')
            ->sortable()
            ->rules('required', 'max:255');

        $fields[] = Text::make('User Application', function () {
            $token = Cache::remember('sc_token', 86400, function () {
                return csrf_token();
            });

            if (isset($this->model()->id) && !$this->model()->isSuperAdmin() && !$this->model()->isSupport()) {
                $url = config('app.url') . 'user/app?id=' . $this->model()->id . '&token=' . $token;
                return '<a href="' . $url . '">Go to the user application</a>';
            } else {
                return '-';
            }
        })
            ->hideWhenUpdating()
            ->hideWhenCreating()
            ->asHtml();

        $fields[] = Text::make('Email')
            ->sortable()
            ->rules('required', 'email', 'max:254')
            ->creationRules('unique:users,email')
            ->updateRules('unique:users,email,{{resourceId}}');

        $fields[] =  Select::make('Store type', 'store_type')->options([
            0 => 'Fake store',
            1 => 'Real store',
        ])->displayUsingLabels();

        $store = $this->model()->stores()->first();
        $fields[] = new Panel('Offers total data', $this->totalFields($store));
        if (isset($this->model()->id) && !$this->model()->isSuperAdmin() && !$this->model()->isSupport()) {

            $store = $this->model()->stores()->first();
            if ($store && $store['free_store'] != 1) {
                if (!is_null($store)) {

                    $charge = $store->charge()->first();
                    if (!empty($charge)) {
                        $usageCharges = UsageCharge::where('charge_id', $charge->shopify_charge_id)->get();
                        $fields[] = new Panel('Subscription', $this->chargeFields($charge));

                        if ($usageCharges->isNotEmpty()) {
                            foreach ($usageCharges as $key => $usageCharge) {
                                $fields[] = new Panel('Usage charge ' . ($key + 1), $this->usageChargeFields($usageCharge));
                            }
                        }
                    }
                }
            }
        }

        if ($this->model()->isSuperAdmin()) {
            $fields[] = Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8');
        }

        $fields[] = Password::make('Password')
            ->onlyOnForms();


        $fields[] = MorphToMany::make('Roles', 'roles', \Eminiarts\NovaPermissions\Nova\Role::class);

        return $fields;
    }

    protected function totalFields($store)
    {
//        $store = $this->model()->stores()->first();

        $fields[] = Text::make('Total Offers Created', 'total_offers', function () use ($store) {
            $countOffers = MainOffer::where('store_id', $store->id ?? 0)->count();

            return $countOffers;
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->sortable()
            ->hideWhenCreating();

        $fields[] = Text::make('Total Amount Earned', 'total_amount', function () use ($store) {
            $offersAmmount = MainOffer::where('store_id', $store->id ?? 0)
                ->join('offer_repport_cart', 'offer_repport_cart.main_offer_id', '=', 'main_offers.id')
                ->addSelect(\DB::raw("SUM(offer_repport_cart.ammount) AS total_amount"))
                ->toBase()
                ->first();

            return $offersAmmount->total_amount ?? 0;
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->sortable()
            ->hideWhenCreating();

        return $fields;
    }

    protected function chargeFields($charge)
    {
        $fields[] = Text::make('Subscription name', 'subscription_name', function () use ($charge) {
            return $charge->name;
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Install App', 'created_at', function ($val) {
            return Carbon::parse($val)->format('Y-m-d');
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true,
                'editing' => false
            ]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Activation of the subscription', 'activated_on', function () use ($charge) {
            return Carbon::parse($charge->activated_on)->format('Y-m-d');
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Recurring Application Charge start', 'billing_on', function () use ($charge) {
            return Carbon::parse($charge->billing_on)->format('Y-m-d');
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Recurring Application Charge end', 'ends_at', function () use ($charge) {
            return Carbon::parse($charge->ends_at)->format('Y-m-d');
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Trial days', 'trial_days', function () use ($charge) {
            return $charge->trial_days;
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Status subscription', 'status', function () use ($charge) {
            return $charge->status;
        })
            ->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
            ->hideFromIndex()
            ->hideWhenCreating();

        return $fields;
    }

    public function usageChargeFields($usageCharge)
    {
        $fields[] = Text::make('Usage charge price', 'usage_charge_price', function () use ($usageCharge) {
            return $usageCharge->price;
        })
            ->withMeta(['extraAttributes' => ['readonly' => true]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Discount', 'discount', function () use ($usageCharge) {
            return $usageCharge->discount;
        })
            ->withMeta(['extraAttributes' => ['readonly' => true]])
            ->hideFromIndex()
            ->hideWhenCreating();


        $fields[] = Text::make('Total orders', 'total_orders', function () use ($usageCharge) {
            return $usageCharge->total_orders;
        })
            ->withMeta(['extraAttributes' => ['readonly' => true]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Created at', 'created_at_charge', function () use ($usageCharge) {
            return Carbon::parse($usageCharge->created_at)->format('Y-m-d H:m');
        })
            ->withMeta(['extraAttributes' => ['readonly' => true]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Invoicing date at', 'billed_date', function () use ($usageCharge) {
            return $usageCharge->billed_date;
        })
            ->withMeta(['extraAttributes' => ['readonly' => true]])
            ->hideFromIndex()
            ->hideWhenCreating();

        $fields[] = Text::make('Payment status', 'payment_status', function () use ($usageCharge) {
            return $usageCharge->payment_status;
        })
            ->withMeta(['extraAttributes' => ['readonly' => true]])
            ->hideFromIndex()
            ->hideWhenCreating();

        return $fields;
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new StoreType(),
            new InstallStoreFilter(),
            new UserSubscription()
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
