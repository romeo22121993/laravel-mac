<?php

namespace App\Http\Controllers\Frontend;

use App\Models\MultiImg;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\ContactMail;
use Mail;

class ProductController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Function for product detail page
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ProductDetails( $slug ){

        $product = Product::where( 'slug', $slug )->first();

        $relatedProduct = Product::where('cat_id', $product->cat_id)->where('id','!=', $product->id)->orderBy('id','DESC')->get();

        $featured      = Product::where('featured', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $hot_deals     = Product::where('hot_deals', 1)->where('discount_price', '!=', NULL)->orderBy('id', 'DESC')->limit(3)->get();
        $special_offer = Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $special_deals = Product::where('special_deals', 1)->orderBy('id', 'DESC')->limit(3)->get();

        $tags  = Product::groupBy('tags')->select('tags')->get();

        //$reviews  = Review::where('product_id',$id)->latest()->limit(5)->get();

        return view('frontend.product.singleProduct',
            compact('product', 'relatedProduct',  'featured', 'hot_deals', 'special_offer', 'special_deals', 'tags' )
        );
    }


}
