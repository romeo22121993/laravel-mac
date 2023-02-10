<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use App\Models\Wishlist;
use Carbon\Carbon;

use App\Models\Coupon;
use Illuminate\Support\Facades\Session;

use App\Models\ShipDivision;

class CartController extends Controller
{

    /**
     * Function adding to cart with product id
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function AddToCart( Request $request, $id ){

        $userID = Auth::id();

        if (Session::has('coupon')) {
            Session::forget('coupon');
        }

    	$product = Product::findOrFail( $id );

        $price = empty( $product->discount_price ) ? $product->selling_price : $product->discount_price;

        Cart::add([
            'id'       => $id,
            'name'     => $request->product_name,
            'quantity' => (int)$request->quantity,
            'price'    => $price,
            'weight'   => 1,
            'attributes' => [
                'image' => $product->thumbnail,
                'color' => $request->color,
                'size'  => $request->size,
            ],
        ]);

        return response()->json(['success' => 'Successfully Added on Your Cart']);

    }


    /**
     * Function showing cart page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MyCart(){

        $carts     = Cart::getContent();
        $cartQty   = Cart::getTotalQuantity();
        $cartTotal = Cart::getSubTotalWithoutConditions();

        $cartTotal = str_replace( ',', '', $cartTotal);
        $cartQty   = str_replace( ',', '', $cartQty);

        return view('frontend.wishlist.view_mycart', compact( 'carts', 'cartTotal', 'cartQty'));
    }



    /**
     * Function getting cart details data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function AddMiniCart(){

        $carts     = Cart::getContent();
        $cartQty   = Cart::getTotalQuantity();
        $cartTotal = Cart::getSubTotalWithoutConditions();

        $cartTotal = str_replace( ',', '', $cartTotal);
        $cartQty   = str_replace( ',', '', $cartQty);

    	return response()->json(array(
    		'carts'     => $carts,
    		'cartQty'   => $cartQty,
    		'cartTotal' => $cartTotal,
    	));
    }

    /**
     * Function removing mini cart
     *
     * @param $rowId
     * @return \Illuminate\Http\JsonResponse
     */
    public function RemoveMiniCart($rowId){
    	Cart::remove($rowId);
    	return response()->json(['success' => 'Product Remove from Cart']);
    }

    /**
     * Function adding product to wishlist
     *
     * @param Request $request
     * @param $product_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function AddToWishlist(Request $request, $product_id){

        if ( Auth::check() ) {

            $exists = Wishlist::where('user_id', Auth::id())->where('product_id',$product_id)->first();

            if ( !$exists ) {
                Wishlist::insert([
                    'user_id'    => Auth::id(),
                    'product_id' => $product_id,
                    'created_at' => Carbon::now(),
                ]);

                return response()->json(['success' => 'Successfully Added On Your Wishlist']);

            } else {
                return response()->json(['error' => 'This Product is Already on Your Wishlist']);
            }

        } else {
            return response()->json(['error' => 'At First Login Your Account']);
        }

    }


    /**
     * Function getting cart product by ajax
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function GetCartProduct(){

        $carts     = Cart::getContent();
        $cartQty   = Cart::getTotalQuantity();
        $cartTotal = Cart::getSubTotalWithoutConditions();

        $cartTotal = str_replace( ',', '', $cartTotal);
        $cartQty   = str_replace( ',', '', $cartQty);

        return response()->json(array(
            'carts'     => $carts,
            'cartQty'   => $cartQty,
            'cartTotal' => round($cartTotal),
        ));

    }

    /**
     * Function removing cart product
     *
     * @param $rowId
     * @return \Illuminate\Http\JsonResponse
     */
    public function RemoveCartProduct($rowId){
        Cart::remove($rowId);

        if (Session::has('coupon')) {
           Session::forget('coupon');
        }

        return response()->json(['success' => 'Successfully Remove From Cart']);
    }

    /**
     * Function cart incrementing on backend side
     *
     * @param $rowId
     * @return \Illuminate\Http\JsonResponse
     */
    public function CartIncrement( $rowId ){

        $row = Cart::get( $rowId );
        Cart::update( $rowId, [ 'quantity' => 1 ] );

        if ( Session::has('coupon') ) {

            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon      = Coupon::where('coupon_name',$coupon_name)->first();

            $cartTotal = Cart::getSubTotalWithoutConditions();
            $cartTotal = str_replace( ',', '', $cartTotal);

            $discountAmount = $cartTotal * $coupon->coupon_discount/100;
            $discountAmount = round($discountAmount, 2);
            $totalAmount    = $cartTotal - $discountAmount;
            $totalAmount    = round($totalAmount, 2);

            Session::put('coupon',[
                'coupon_name'     => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => $discountAmount,
                'total_amount'    => $totalAmount
            ]);
        }

        return response()->json('increment');

    }

    /**
     * Function Cart Decrementing
     *
     * @param $rowId
     * @return \Illuminate\Http\JsonResponse
     */
    public function CartDecrement($rowId){

        $row = Cart::get( $rowId );
        Cart::update( $rowId, [ 'quantity' => -1 ]  );

        if ( Session::has('coupon') ) {

            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon      = Coupon::where('coupon_name',$coupon_name)->first();

            $cartTotal = Cart::getSubTotalWithoutConditions();
            $cartTotal = str_replace( ',', '', $cartTotal);

            $discountAmount = $cartTotal * $coupon->coupon_discount/100;
            $discountAmount = round($discountAmount, 2);
            $totalAmount    = $cartTotal - $discountAmount;
            $totalAmount    = round($totalAmount, 2);

            Session::put('coupon',[
                'coupon_name'     => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => $discountAmount,
                'total_amount'    => $totalAmount
            ]);
        }

        return response()->json('Decrement');

    }

}
