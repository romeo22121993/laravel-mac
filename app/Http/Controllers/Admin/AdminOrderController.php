<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Auth;
use Carbon\Carbon;
use PDF;
use DB;


class AdminOrderController extends Controller
{

    /**
     * Function of page with pending orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function PendingOrders(){
		$orders = Order::where('status','pending')->orderBy('id','DESC')->paginate(5);

		return view('admin.orders.pending_orders', compact('orders') );
	}

    /**
     * Function Pending Order Details
     *
     * @param $order_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function AdminOrdersDetails( $order_id ){

		$order     = Order::where('id', $order_id)->first();
    	$orderItem = OrderItem::where('order_id', $order_id)->orderBy('id','DESC')->get();

        return view('admin.orders.admin_order_details', compact('order','orderItem') );

	}


    /**
     * Function for  Confirmed Orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function ConfirmedOrders(){
		$orders = Order::where('status','confirmed')->orderBy('id','DESC')->get();

        return view('admin.orders.confirmed_orders',compact('orders'));
	}

    /**
     * Processing Orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ProcessingOrders(){
		$orders = Order::where('status','processing')->orderBy('id','DESC')->get();

        return view('admin.orders.processing_orders',compact('orders'));
	}


    /**
     * Picked Orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function PickedOrders(){
		$orders = Order::where('status','picked')->orderBy('id','DESC')->get();

        return view('admin.orders.picked_orders',compact('orders'));
	}


    /**
     * Shipped Orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ShippedOrders(){
		$orders = Order::where('status','shipped')->orderBy('id','DESC')->get();

        return view('admin.orders.shipped_orders',compact('orders'));
	}


    /**
     * Delivered Orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function DeliveredOrders(){
		$orders = Order::where('status','delivered')->orderBy('id','DESC')->get();

        return view('admin.orders.delivered_orders',compact('orders'));
	}


    /**
     * Canceled Orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function CanceledOrders(){
		$orders = Order::where('status', 'canceled')->orderBy('id','DESC')->get();

        return view('admin.orders.canceled_orders',compact('orders'));
	}


    /**
     * Function changing status
     *
     * @param $order_id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function PendingToConfirm($order_id){

        Order::findOrFail($order_id)->update(['status' => 'confirmed']);

        return redirect()->route('wpadmin.orders.pending');

	}


    /**
     * Function changing status
     *
     * @param $order_id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function ConfirmToProcessing($order_id){

        Order::findOrFail($order_id)->update(['status' => 'processing']);

        return redirect()->route('wpadmin.orders.confirmed');

	}

    /**
     * Function changing status
     *
     * @param $order_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ProcessingToPicked($order_id){

        Order::findOrFail($order_id)->update(['status' => 'picked']);

        return redirect()->route('wpadmin.orders.processing');

	}

    /**
     * Function changing status
     *
     * @param $order_id
     * @return \Illuminate\Http\RedirectResponse
     */
	 public function PickedToShipped($order_id){

        Order::findOrFail($order_id)->update(['status' => 'shipped']);


        return redirect()->route('wpadmin.orders.picked');

	}

    /**
     * Function changing status
     *
     * @param $order_id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function ShippedToDelivered($order_id){

        $order_item = OrderItem::where('order_id', $order_id)->get();
        foreach ($order_item as $item) {
            Product::where('id', $item->product_id)
            ->update(['qty' => DB::raw('qty-'.$item->qty)]);
        }

        Order::findOrFail($order_id)->update(['status' => 'delivered']);

        return redirect()->route('wpadmin.orders.shipped');

	}


    /**
     * Function download pdf from order
     *
     * todo -> very good pdf example !!
     *
     * @param $order_id
     * @return mixed
     */
	public function AdminInvoiceDownload($order_id){

		$order     = Order::where('id',$order_id)->first();
    	$orderItem = OrderItem::where('order_id',$order_id)->orderBy('id','DESC')->get();

		$pdf = PDF::loadView('admin.orders.order_invoice', compact('order','orderItem'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot'  => public_path(),
		]);

		return $pdf->download('invoice.pdf');

	}



}
