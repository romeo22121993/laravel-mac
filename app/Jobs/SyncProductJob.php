<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Modules\Offer\Entities\Product;

class SyncProductJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $shopifyRepo;

    private $offersProducts;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($shopifyRepo, $offersProducts)
    {
        $this->shopifyRepo = $shopifyRepo;
        $this->offersProducts = $offersProducts;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $productIds = $this->offersProducts->pluck('productId')->toArray();
        $products = $this->shopifyRepo->getProductsByIds(implode(',', $productIds), ['fields' => 'id,title,handle,body_html,variants,image,images']);
        $prepareProduct = new Product();
        $products = $prepareProduct->prepareRestResponse($products);

        if (!empty($products['products'])) {

            \DB::beginTransaction();
            foreach ($products['products'] as $product) {

                $description = $product['description'];
                $descriptionHtml = $product['description_html'];

                \App\Models\Product::where('productId', $product['productId'])
                    ->update([
                        "title" => $product['title'],
                        "description" => $description,
                        "description_html" => $descriptionHtml,
                        "variantPrice" => 0.00,
                        "image" => $product['image'],
                        "inventory_quantity" => 0,
                        "inventory_policy" => 'deny',
                        "inventory_management" => 'shopify',
                    ]);

                foreach ($product['variants'] as $variant) {
                    if (in_array($variant['productId'], $productIds)) {
                        \App\Models\Product::where('productId', $variant['productId'])
                            ->update([
                                "title" => $variant['title'],
                                "description" => $description,
                                "description_html" => $descriptionHtml,
                                "variantPrice" => $variant['variantPrice'],
                                "image" => $variant['image'],
                                "inventory_quantity" => $variant['inventory_quantity'],
                                "inventory_policy" => $variant['inventory_policy'],
                                "inventory_management" => $variant['inventory_management'],
                            ]);
                    }
                }
            }
            \DB::commit();

            $this->clearOffersCache($this->offersProducts->pluck('offer_id')->unique());
        }
    }

    private function clearOffersCache($offerIds)
    {
        foreach ($offerIds as $offerId) {
            if (Cache::has("main_offer_with_offers_relation_{$offerId}")) {
                Cache::forget("main_offer_with_offers_relation_{$offerId}");
            }
        }
    }
}
