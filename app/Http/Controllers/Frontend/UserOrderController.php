<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;

use App\Mail\OrderMail;
use PDF;

class UserOrderController extends Controller
{
    /**
     * Function showing orders page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function MyOrders(){

    	$orders = Order::where('user_id', Auth::id())->orderBy('id','DESC')->get();

    	return view('frontend.user.order.orders_view', compact('orders') );

    }

    /**
     * Function order details
     *
     * @param $order_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function OrderDetails($order_id){

    	$order = Order::where('id', $order_id)->where('user_id', Auth::id())->first();
    	$orderItem = OrderItem::where('order_id', $order_id)->orderBy('id','DESC')->get();

        return view('frontend.user.order.order_details', compact('order','orderItem'));

    }

    /**
     * Function invoice download - exporting to pdf file
     *
     * @param $order_id
     * @return mixed
     */
    public function InvoiceDownload($order_id){

        $order = Order::where('id',$order_id)->where('user_id', Auth::id())->first();
        $orderItem = OrderItem::where('order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = PDF::loadView('frontend.user.order.order_invoice', compact('order','orderItem'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot'  => public_path(),
        ]);

        return $pdf->download('invoice.pdf');

    }

    /**
     * Function returning of order
     *
     * @param Request $request
     * @param $order_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ReturnOrder(Request $request,$order_id){

        Order::findOrFail($order_id)->update([
            'return_date'   => Carbon::now()->format('d F Y'),
            'return_reason' => $request->return_reason,
//            'return_order'  => 1,
//            'status'        => 'canceled',
        ]);

        return redirect()->route('my.orders');

    }

    /**
     * Function of page for returning orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ReturnOrderList(){
        $orders = Order::where('user_id', Auth::id())->where('return_reason','!=',NULL)->orderBy('id','DESC')->get();

        return view('frontend.user.order.return_order_view',compact('orders'));
    }

    /**
     * Function canceled orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function CancelOrders(){

        $orders = Order::where('user_id',Auth::id())->where('status','canceled')->orderBy('id','DESC')->get();
        return view('frontend.user.order.cancel_order_view',compact('orders'));

    }

    /**
     * Function tracking of order
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function OrderTraking(Request $request){

        $invoice = $request->code;

        $track = Order::where('invoice_no',$invoice)->first();

        if ( $track ) {
            return view('frontend.traking.track_order', compact('track') );
        } else {
            $notification = array(
                'message'    => 'Invoice Code Is Invalid',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

    }

}
