<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /*
        view()->composer('*',function($view) use ($request) {
            $storeId = session('store_id');

            if (!$storeId) return null;

            $options = Cache::rememberForever("instructionPopup_{$storeId}", function () {
                return Store::where('id', session('store_id'))->first(['options']);
            });

            $storeId = session('store_id');
            $store = Cache::rememberForever("store_{$storeId}", function () use ($storeId) {
                return Store::where('id', $storeId)
                    ->select(['id', 'name', 'domain', 'options', 'script_tag', 'block_app', 'active_app'])
                    ->first();
            });
            $user = auth()->user();

            $oneDay = 86400;
            $repport = Cache::remember('repport_ammount', $oneDay, function () {
                return OfferRepport::addSelect(\DB::raw("SUM(ammount) AS ammount"))->first();
            });

            $rating = 0;
            if ($userId = auth()->id()) {
                $rating = Cache::rememberForever("rating_{$storeId}", function () use ($userId) {
                    $res = Rating::where('user_id', $userId)->orderByDesc('created_at')->first(['stars', 'blocked_at']);
                    return !empty($res) ? $res : 0;
                });
            }

            $checkSubscription = Cache::rememberForever("check_subscription_{$storeId}", function () use ($storeId) {
                return Charge::where('shopify_charge_id', '>', 0)
                    ->where('store_id', $storeId)
                    ->exists();
            });


            $isActivateApp = true;
            $appActivationUrl = '';
            if (request()->is('dashboard/all') && !$request->has('hmac')) {
                $shopifySevice = new ShopifySettingService(App::make(ShopifyApiRepository::class));

                if (!Cache::has("mainThemeId_{$storeId}")) {
                    $oneDay = 40;
                    $mainTheme = $shopifySevice->getMainTheme();
                    $mainThemeId = $mainTheme['id'];
                    Cache::put("mainThemeId_{$storeId}", $mainThemeId, $oneDay);
                } else {
                    $mainThemeId = Cache::get("mainThemeId_{$storeId}");
                }

                if (!Cache::has("isActivateApp_{$storeId}")) {
                    $twoMinutes = 40;
                    $isActivateApp = $shopifySevice->checkActivateApp($mainThemeId);
                    Cache::put("isActivateApp_{$storeId}", $isActivateApp, $twoMinutes);
                } else {
                    $isActivateApp = Cache::get("isActivateApp_{$storeId}");
                }

                $appActivationUrl = $shopifySevice->getUrlToActivateApp($mainThemeId, config('app.activate_app_id'), $store->domain);
            }

            $oneDay = 86400;
            $countOffers = Cache::remember("countOffers_{$storeId}", $oneDay, function () use ($storeId) {
                return MainOffer::where('store_id', $storeId)->count();
            });

            $shopData = session('shopData');
            $storeOwnerName = $shopData['shop']['shop_owner'] ?? $store->domain;

            $view->with([
                'instructionPopup' => $options->instruction_popup ?? 0,
                'userEmail' => $user->email ?? '',
                'storeUrl' => $store->domain ?? '',
                'allAmount' => number_format($repport->ammount ?? 0, 2),
                'rating' => $rating,
                'rate' => 0,
                'blockApp' => $store->block_app,
                'checkSubscription' => $checkSubscription,
                'isActivateApp' => $isActivateApp,
                'storeActivate'  => $store->active_app,
                'appActivationUrl' => $appActivationUrl,
                'storeOwnerName' => $storeOwnerName,
                'countOffers' => $countOffers
            ]);
        });

        */


    }
}
