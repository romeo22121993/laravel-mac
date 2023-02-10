<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\OrderObserverJob;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class CashController extends Controller
{

    /**
     * Function creating cash order
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function CashOrder(Request $request){

        if ( Session::has('coupon') ) {
            $totalAmount = Session::get('coupon')['total_amount'];
        } else {
            $totalAmount = round( str_replace(',', '', Cart::getTotalQuantity() ) );
        }
        $cartTotal = round( str_replace(',', '', Cart::getSubTotalWithoutConditions() ) );

        $order_id = Order::insertGetId([
            'user_id'     => Auth::id(),
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_id'  => $request->state_id,
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'post_code' => $request->post_code,
            'notes'     => $request->notes,
            'payment_type'   => 'Cash On Delivery',
            'payment_method' => 'Cash On Delivery',
            'currency'    =>  'Usd',
            'amount'      => $totalAmount,
            'total_price' => $cartTotal,
            'invoice_no'  => 'EOS'.mt_rand(10000000,99999999),
            'order_date'  => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year'  => Carbon::now()->format('Y'),
            'status'      => 'pending',
            'created_at'  => Carbon::now(),
        ]);

        // Start Send Email
        $createdOrder = Order::findOrFail( $order_id );
        dispatch( new OrderObserverJob( $createdOrder, 'created' ) );

        $carts = Cart::getContent();
        foreach ( $carts as $cart ) {
            OrderItem::insert([
                'order_id'   => $order_id,
                'product_id' => $cart->id,
                'color'      => $cart->attributes->color,
                'size'       => $cart->attributes->size,
                'qty'        => $cart->quantity,
                'price'      => $cart->price,
                'created_at' => Carbon::now(),
            ]);

            Cart::remove( $cart->id );
        }

        if ( Session::has('coupon') ) {
            Session::forget('coupon');
        }


        return redirect()->route('shop');

    }

}
