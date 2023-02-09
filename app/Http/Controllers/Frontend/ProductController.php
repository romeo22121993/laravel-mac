<?php

namespace App\Http\Controllers\Frontend;

use App\Models\MultiImg;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProductCategory;
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
    public function ProductDetails( $slug ) {

        $product = Product::where( 'slug', $slug )->first();

        $relatedProduct = Product::where('cat_id', $product->cat_id)->where('id','!=', $product->id)->orderBy('id','DESC')->get();

        $featured      = Product::where('featured', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $hot_deals     = Product::where('hot_deals', 1)->where('discount_price', '!=', NULL)->orderBy('id', 'DESC')->limit(3)->get();
        $special_offer = Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $special_deals = Product::where('special_deals', 1)->orderBy('id', 'DESC')->limit(3)->get();

        $tags  = Product::groupBy('tags')->select('tags')->get();

        return view('frontend.product.singleProduct',
            compact('product', 'relatedProduct',  'featured', 'hot_deals', 'special_offer', 'special_deals', 'tags' )
        );
    }

    /**
     * Category page for products functionality
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function CategoriesProducts( Request $request, $slug ){

        $catId = ProductCategory::where( 'slug', $slug )->first();

        $products = Product::where('status', 1 )
            ->where( function( $query ) use ( $catId ){
                $query->where('cat_id', $catId->id)->orWhere('subcat_id', $catId->id);
            })
           ->orderBy('id','DESC')->paginate(1);

//        ///  Load More Product with Ajax
//        if ($request->ajax()) {
//            $grid_view = view('frontend.product.grid_view_product',compact('products'))->render();
//            $list_view = view('frontend.product.list_view_product',compact('products'))->render();
//            return response()->json(['grid_view' => $grid_view, 'list_view' => $list_view]);
//        }

        ///  End Load More Product with Ajax

        return view('frontend.product.subcat_view', compact('products' ));

    }


    /**
     * Function showing products by tags
     *
     * @param $tag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function TagWiseProduct( $chosen_tag ) {

        $products = Product::where('status', 1)->where('tags', 'LIKE' , '%' .$chosen_tag .'%')->orderBy('id', 'DESC')->paginate(1);

        return view('frontend.product.tags_view', compact( 'products' ) );
    }

    /**
     * Function showing products by colors
     *
     * @param $tag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ColorWiseProduct( $chosen_tag ) {

        $products = Product::where('status', 1)->where('color', 'LIKE' , '%' .$chosen_tag .'%')->orderBy('id', 'DESC')->paginate(1);

        return view('frontend.product.tags_view', compact( 'products' ) );
    }

    /**
     * Function showing products by sizes
     *
     * @param $tag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SizeWiseProduct( $chosen_tag ) {

        $products = Product::where('status', 1)->where('size', 'LIKE' , '%' .$chosen_tag .'%')->orderBy('id', 'DESC')->paginate(1);

        return view('frontend.product.tags_view', compact( 'products' ) );
    }


    /**
     * Helper function for getting distinct tags
     *
     * @param $array
     * @return array
     */
    public function getDistinctTags( $array, $type ) {
        $arr = array();

        foreach ( $array as $tag ) {

            $variable = explode(',', $tag->$type );
            foreach ( $variable as $tag ) {
                if (!in_array($tag, $arr)) {
                    $arr[] = $tag;
                }
            }
        }

        return $arr;
    }


    /**
     * Function product searching
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ProductSearch( Request $request ){

        $request->validate( ["search" => "required"] );
        $item = $request->search;

        $products  = Product::where('name','LIKE',"%$item%")->paginate(10);

        return view('frontend.product.search', compact('products'));

    }

    /**
     * Advance Search Options
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function SearchProduct( Request $request ){

        $request->validate( ["search" => "required" ]);

        $item = $request->search;

        $products = Product::where('name','LIKE',"%$item%")->select('name', 'thumbnail','selling_price','id','slug')->limit(5)->get();

        return view('frontend.product.search_product', compact( 'products' ) );

    }


    /**
     * Function getting ajax data by product id
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function ProductViewAjax( $id ){

        $product       = Product::with('category','brand')->findOrFail($id);

        $color         = $product->color;
        $product_color = explode(',', $color);

        $size         = $product->size;
        $product_size = explode(',', $size);

        return response()->json(array(
            'product' => $product,
            'color'   => $product_color,
            'size'    => $product_size,
        ));

    }


}
