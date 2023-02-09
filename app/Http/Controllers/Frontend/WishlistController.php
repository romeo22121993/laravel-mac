<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Wishlist;
use Carbon\Carbon;

class WishlistController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Function adding product to wishlist
     *
     * @param Request $request
     * @param $product_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function AddToWishlist( Request $request, $product_id ){

        $user = Auth::id();
        if ( !empty( $user ) ) {

            $exists = Wishlist::where('user_id', $user )->where('product_id', $product_id)->first();

            if ( !$exists ) {
                Wishlist::create([
                    'user_id'    => $user,
                    'product_id' => $product_id,
                ]);

                return response()->json(['success' => 'Successfully Added On Your Wishlist']);

            } else {
                return response()->json(['error' => 'This Product is Already on Your Wishlist']);
            }

        } else {
            return response()->json( ['error' => 'At First Login Your Account']);
        }

    }


    /**
     * Function showing wishlist page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function ViewWishlist(){

//        $wishlist = Wishlist::with('products')->where('user_id', Auth::id() )->latest()->get();
        $wishlist = Wishlist::where('user_id', Auth::id() )->latest()->get();


		return view('frontend.wishlist.view_wishlist', compact('wishlist'));
	}

    /**
     * Function getting wishlist product
     *
     * @return \Illuminate\Http\JsonResponse
     */
	public function GetWishlistProduct(){
		$wishlist = Wishlist::where('user_id', Auth::id() )->latest()->get();

		return response()->json($wishlist);
	}

    /**
     * Function removing item from wishlist page
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
	public function RemoveWishlistProduct( $id ){
		Wishlist::where( 'user_id', Auth::id() )->where( 'id', $id )->delete();

		return response()->json(['success' => 'Successfully Product Remove']);
	}


}
