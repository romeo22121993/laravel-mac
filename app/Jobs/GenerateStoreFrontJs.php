<?php

namespace App\Jobs;

use App\Entities\StoreFrontJsGenerator;
use App\Models\Store;
use App\Models\UserProvider;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Offer\Repositories\ShopifyApiRepository;
use Modules\Settings\Services\ShopifySettingService;


class GenerateStoreFrontJs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $backoff = 60;

    private $storeId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $store = Store::where('id', $this->storeId)->first();

        if ($store) {
            $userProvider = UserProvider::where('store_id', $this->storeId)->first(['provider_token']);
            $providerToken = $userProvider->provider_token;
            $storeFrontGenerator = new StoreFrontJsGenerator($this->storeId, $store->domain);
            $storeFrontGenerator->generateJs();

            $repository = new ShopifyApiRepository($store->domain, $providerToken, $this->storeId);


            if ($store->script_tag) {
                $repository->deleteScripts();
            }
            $this->postScripts($repository, $store, $store->script_version);
        }
    }


    private function postScripts($repository, $store, $scriptVersion)
    {
        /*
         * post script on Shopify storefront
         */
        $response = $repository->postScripts($scriptVersion);

        /*
         * update script data on store
         */
        if(isset($response['script_tag']['id'])) {
            $store->script_version = $store->script_version == 255 ? 1 : $store->script_version + 1;
            $store->script_tag = $response['script_tag']['id'];
            $store->save();
        }
    }

    private function checkStoreScope()
    {
        $storeScope = \App\Models\Store::where('stores.id', $this->storeId)
            ->addSelect('stores.id')
            ->join('store_scope', 'store_scope.store_id', '=', 'stores.id')
            ->join(\DB::raw("(SELECT * FROM scopes WHERE scope = 'write_themes') AS scopes"),
                function ($join) { $join->on('scopes.id', '=', 'store_scope.scope_id'); })
            ->groupBy('stores.id')
            ->toBase()
            ->first();

        return !$storeScope ? false : true;
    }

    /**
     * Get the tags that should be assigned to the job.
     *
     * @return array
     */
    public function tags()
    {
        return ['storefront_js', 'js_generate_store_id:' . $this->storeId];
    }
}
