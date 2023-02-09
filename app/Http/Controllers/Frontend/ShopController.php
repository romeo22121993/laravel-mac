<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class ShopController extends Controller
{

    public $number = 1;

    /**
     * Function shop page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ShopPage(){

        $products = Product::query();

        if ( !empty( $_GET['category'] ) && empty( $_GET['brand'] )  ) {
            $slugs    = explode(',',$_GET['category']);
            $catIds   = ProductCategory::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('cat_id', $catIds)->paginate($this->number);
        }
        elseif ( !empty($_GET['brand']) && empty($_GET['category']) ) {
            $slugs    = explode(',',$_GET['brand']);
            $brandIds = ProductBrand::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id', $brandIds)->paginate($this->number);
        }
        elseif ( !empty( $_GET['category'] ) && !empty( $_GET['brand'] ) ) {
            $slugs    = explode(',', $_GET['category']);
            $catIds   = ProductCategory::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $slugs1   = explode(',',$_GET['brand']);
            $brandIds = ProductBrand::select('id')->whereIn('slug', $slugs1)->pluck('id')->toArray();
            $products = $products->whereIn('cat_id', $catIds)->orWhereIn('brand_id',$brandIds)->paginate($this->number);
        }
        else {
            $products = Product::where('status', 1)->orderBy('id','DESC')->paginate($this->number);
        }

        return view('frontend.shop.shop_page', compact('products'));

    }


    /**
     * Function shop filtering
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ShopFilter(Request $request){

        $data = $request->all();

        // Filter Category
        $catUrl = "";
        if ( !empty( $data['category'] ) ) {
           foreach ( $data['category'] as $category ) {
              if ( empty( $catUrl ) ) {
                 $catUrl .= '&category='.$category;
              } else {
                $catUrl .= ','.$category;
              }
           }
        }

         // Filter Brand
        $brandUrl = "";
        if ( !empty( $data['brand'] ) ) {
           foreach ( $data['brand'] as $brand ) {
              if ( empty( $brandUrl ) ) {
                 $brandUrl .= '&brand='.$brand;
              } else {
                $brandUrl .= ','.$brand;
              }
           }
        }

        return redirect()->route('shop', $catUrl.$brandUrl );

    }

}
