<?php

namespace App\Jobs;

use App\Models\Charge;
use App\Models\Store;
use App\Models\UsageCharge;
use App\Models\UserProvider;
use Arr;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Offer\Repositories\ShopifyApiRepository;
use Modules\Subscription\Entities\SubscriptionApp;

class RefreshSubscription implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $backoff = 10;

    private $today;
    private $charge;
    private $user;
    private $storeDomain;
    private $providerToken;

    private $subscriptionApp;

    /**
     * RefreshSubscription constructor.
     *
     * @param  Charge  $charge
     * @param $today
     */
    public function __construct(Charge $charge, $today)
    {
        $this->today = $today;
        $this->charge = $charge;
        $this->subscriptionApp = new SubscriptionApp();
    }

    /**
     * Execute the job.
     * Receiving subscription data from Shopify, and comparing the subscription date in the database.
     * If the date from the Shopify is greater, it means that there has been a monthly payment.
     *
     * @throws \Exception
     */
    public function handle()
    {
        if ($this->charge->shopify_charge_id > 0) {
            $this->storeDomain = $this->getStoreDomain($this->charge->store_id);
            $this->providerToken = $this->getProviderToken($this->charge->store_id)->provider_token;

            $this->refreshSubscription();
        } else {
            $this->charge->job_status = $this->subscriptionApp::JOB_STATUS;
            $this->charge->update();
        }
    }

    /**
     * check shopify subscription status and determine the next inspection date
     */
    private function refreshSubscription()
    {
        /*
         * connect to Shopify, receiving data recurring_application_charges
         */
        try {
            $repository = new ShopifyApiRepository($this->storeDomain->domain, $this->providerToken, $this->charge->store_id);
            $response = Arr::get($repository->getRecurringApplicationCharges($this->charge->shopify_charge_id), 'recurring_application_charge', null);
        } catch (\Exception $e) {
            $ex_msg = "Recurring application charges failed - Store id: {$this->charge->store_id} - " . $e->getMessage();
            \Log::build([
                'driver' => 'daily',
                'path' => storage_path("logs/subscription/log.log"),
            ])->info($ex_msg);
            $this->changeJobStatus();
            $this->fail($e);
        }

        /*
         * if property billing_on returned shopify >
         * if the property "billing_on" returned by the shopify is greater than the one "billing_on" stored in the database,
         * then the user has successfully paid for the subscription for the previous month.
         * if not then he can do it with a delay of two days and we should check the payment tomorrow
         */
        if ($response['billing_on'] > $this->charge->billing_on) {
            $endNextPaymentCycleDate = Carbon::parse($response['billing_on'])->addDays($this->subscriptionApp::BILLING_CYCLE);
            $this->charge->billing_on = $response['billing_on'];
            $this->charge->ends_at = $endNextPaymentCycleDate;

            /*
             * update usage charge status
             */
            $this->updateUsageChargeStatus($this->charge->shopify_charge_id);
            /*
             * create new usage charge at the end of the payment cycle
             */
            $this->createNextUsageCharge($endNextPaymentCycleDate);
        } else {
            $this->charge->ends_at = Carbon::parse($this->today)->addDays($this->subscriptionApp::FAILED_BILLING_CYCLE);
        }

        $this->charge->job_status = $this->subscriptionApp::JOB_STATUS;
        $this->charge->status = $response['status'];
        $this->charge->update();
    }

    /**
     * create usage charge in database with a date next payment
     *
     * @param $endNextPaymentCycleDate
     */
    public function createNextUsageCharge($endNextPaymentCycleDate)
    {
        UsageCharge::create([
            'store_id' => $this->charge->store_id,
            'charge_id' => $this->charge->shopify_charge_id,
            'usage_charge_id' => 0,
            'price' => 0,
            'total_cost' => 0,
            'discount' => 0,
            'billed_date' => $endNextPaymentCycleDate
        ]);
    }

    /**
     * update usage charge status whose payment cycle took place
     *
     * @param $shopify_charge_id
     */
    private function updateUsageChargeStatus($shopify_charge_id)
    {
        UsageCharge::where('charge_id', $shopify_charge_id)->orderBy('id', 'DESC')->limit(1)->update([
            'payment_status' => 'paid'
        ]);
    }

    /**
     * get store
     *
     * @param $storeId
     * @return mixed
     */
    private function getStoreDomain($storeId)
    {
        return Store::where('id', $storeId)->first(['domain']);
    }

    /**
     * get provider token
     *
     * @param $storeId
     * @return mixed
     */
    private function getProviderToken($storeId)
    {
        return UserProvider::where('store_id', $storeId)->first(['provider_token']);
    }

    /**
     * change jon status
     */
    private function changeJobStatus()
    {
        $this->charge->job_status = $this->subscriptionApp::JOB_STATUS;
        $this->charge->save();
    }
}
