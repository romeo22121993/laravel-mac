<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{

    /**
     * Function view page of coupons
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CouponView(){

    	$coupons = Coupon::orderBy('id','DESC')->get();

    	return view('admin.coupon.view_coupon', compact('coupons') );
    }

    /**
     * Function creating coupon
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function CouponStore(Request $request){

    	$request->validate([
    		'coupon_name'     => 'required',
    		'coupon_discount' => 'required',
    		'coupon_validity' => 'required',
    	]);

    	Coupon::create([
            'coupon_name'     => $request->coupon_name,
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
    	]);

		return redirect()->back();

    }

    /**
     * Function editing page of coupon
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CouponEdit($id){
        $coupons = Coupon::findOrFail($id);

    	return view('admin.coupon.edit_coupon', compact('coupons'));
    }


    /**
     * Function updating of coupon
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function CouponUpdate(Request $request, $id){

        Coupon::findOrFail($id)->update([
            'coupon_name'     => $request->coupon_name,
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
        ]);

        return redirect()->route('wpadmin.coupons.all');

    }


    /**
     * Function of deleting coupon
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function CouponDelete($id){

    	Coupon::findOrFail($id)->delete();

		return redirect()->back();

    }

    /**
     * Function applying coupon
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function CouponApply( Request $request ){

        $coupon = Coupon::where('coupon_name', $request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first();

        if ( $coupon ) {

            $cartTotal = Cart::getSubTotalWithoutConditions();
            $cartTotal = str_replace( ',', '', $cartTotal);

            $discountAmount = $cartTotal * $coupon->coupon_discount/100;
            $discountAmount = round($discountAmount, 3);
            $totalAmount    = $cartTotal - $discountAmount;
            $totalAmount    = round($totalAmount, 3);

            Session::put('coupon',[
                'coupon_name'     => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => $discountAmount,
                'total_amount'    => $totalAmount
            ]);

            return response()->json(array(
                'validity' => true,
                'success'  => 'Coupon Applied Successfully'
            ));

        } else {
            return response()->json(['error' => 'Invalid Coupon']);
        }
    }


    /**
     * Function calculating of coupon
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function CouponCalculation(){

        $cartTotal = Cart::getSubTotalWithoutConditions();
        $cartTotal = str_replace( ',', '', $cartTotal);

        if (Session::has('coupon')) {
            return response()->json(array(
                'subtotal'        => $cartTotal,
                'coupon_name'     => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => session()->get('coupon')['discount_amount'],
                'total_amount'    => session()->get('coupon')['total_amount'],
            ));
        }else{
            return response()->json(array(
                'total' => $cartTotal,
            ));
        }
    }

    // Remove Coupon
    /**
     * Function removing coupon
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function CouponRemove()
    {
        Session::forget('coupon');

        return response()->json(['success' => 'Coupon Remove Successfully']);
    }

}
