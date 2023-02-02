<?php

namespace App\Observers;

use App\Models\Offer;
use Illuminate\Support\Facades\Cache;

class OfferObserver
{
    /**
     * Handle the offer "created" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function created(Offer $offer)
    {
        $storeId = session('store_id');

        /*
        * deleted store offer widgets list cache
        */
        if (Cache::tags(["widgets_list", "widgets_with_assign_offers_{$storeId}"])->has("widgets_with_assign_offers_{$storeId}")) {
            Cache::tags("widgets_with_assign_offers_{$storeId}")->flush();
        }
        if (Cache::has("main_offer_with_offers_relation_{$offer->main_offer_id}")) {
            Cache::forget("main_offer_with_offers_relation_{$offer->main_offer_id}");
        }
    }

    /**
     * Handle the offer "updated" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function updated(Offer $offer)
    {
        $storeId = session('store_id');

        /*
        * deleted store offer widgets list cache
        */
        if (Cache::tags(["widgets_list", "widgets_with_assign_offers_{$storeId}"])->has("widgets_with_assign_offers_{$storeId}")) {
            Cache::tags("widgets_with_assign_offers_{$storeId}")->flush();
        }
        if (Cache::has("main_offer_with_offers_relation_{$offer->main_offer_id}")) {
            Cache::forget("main_offer_with_offers_relation_{$offer->main_offer_id}");
        }

        if (Cache::tags(["api_get_ab_test_by_store_id_{$storeId}", "api_get_ab_test_by_id_{$offer->ab_test_id}"])->has("api_get_ab_test_by_id_{$offer->ab_test_id}")) {
            Cache::tags("api_get_ab_test_by_id_{$offer->ab_test_id}")->flush();
        }

        /*
         * delete offer products ids
         */
//        if (Cache::has("main_offer_product_ids_{$offer->main_offer_id}")) {
//            Cache::forget("main_offer_product_ids_{$offer->main_offer_id}");
//        }
    }

    /**
     * Handle the offer "deleted" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function deleted(Offer $offer)
    {
        $storeId = session('store_id');

        /*
        * deleted store offer widgets list cache
        */
        if (Cache::tags(["widgets_list", "widgets_with_assign_offers_{$storeId}"])->has("widgets_with_assign_offers_{$storeId}")) {
            Cache::tags("widgets_with_assign_offers_{$storeId}")->flush();
        }
        if (Cache::has("main_offer_with_offers_relation_{$offer->main_offer_id}")) {
            Cache::forget("main_offer_with_offers_relation_{$offer->main_offer_id}");
        }

        if (Cache::tags(["api_get_ab_test_by_store_id_{$storeId}", "api_get_ab_test_by_id_{$offer->ab_test_id}"])->has("api_get_ab_test_by_id_{$offer->ab_test_id}")) {
            Cache::tags("api_get_ab_test_by_id_{$offer->ab_test_id}")->flush();
        }

        /*
         * delete offer products ids
         */
//        if (Cache::has("main_offer_product_ids_{$offer->main_offer_id}")) {
//            Cache::forget("main_offer_product_ids_{$offer->main_offer_id}");
//        }
    }

    /**
     * Handle the offer "restored" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function restored(Offer $offer)
    {
        $storeId = session('store_id');

        /*
        * deleted store offer widgets list cache
        */
        if (Cache::tags(["widgets_list", "widgets_with_assign_offers_{$storeId}"])->has("widgets_with_assign_offers_{$storeId}")) {
            Cache::tags("widgets_with_assign_offers_{$storeId}")->flush();
        }
        if (Cache::has("main_offer_with_offers_relation_{$offer->main_offer_id}")) {
            Cache::forget("main_offer_with_offers_relation_{$offer->main_offer_id}");
        }

        if (Cache::tags(["api_get_ab_test_by_store_id_{$storeId}", "api_get_ab_test_by_id_{$offer->ab_test_id}"])->has("api_get_ab_test_by_id_{$offer->ab_test_id}")) {
            Cache::tags("api_get_ab_test_by_id_{$offer->ab_test_id}")->flush();
        }

        /*
         * delete offer products ids
         */
//        if (Cache::has("main_offer_product_ids_{$offer->main_offer_id}")) {
//            Cache::forget("main_offer_product_ids_{$offer->main_offer_id}");
//        }
    }

    /**
     * Handle the offer "force deleted" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function forceDeleted(Offer $offer)
    {
        $storeId = session('store_id');

        /*
        * deleted store offer widgets list cache
        */
        if (Cache::tags(["widgets_list", "widgets_with_assign_offers_{$storeId}"])->has("widgets_with_assign_offers_{$storeId}")) {
            Cache::tags("widgets_with_assign_offers_{$storeId}")->flush();
        }
        if (Cache::has("main_offer_with_offers_relation_{$offer->main_offer_id}")) {
            Cache::forget("main_offer_with_offers_relation_{$offer->main_offer_id}");
        }

        if (Cache::tags(["api_get_ab_test_by_store_id_{$storeId}", "api_get_ab_test_by_id_{$offer->ab_test_id}"])->has("api_get_ab_test_by_id_{$offer->ab_test_id}")) {
            Cache::tags("api_get_ab_test_by_id_{$offer->ab_test_id}")->flush();
        }

        /*
         * delete offer products ids
         */
//        if (Cache::has("main_offer_product_ids_{$offer->main_offer_id}")) {
//            Cache::forget("main_offer_product_ids_{$offer->main_offer_id}");
//        }
    }
}
