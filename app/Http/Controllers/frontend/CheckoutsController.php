<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CheckoutsController extends Controller
{

    public function index()
    {
        $payments = Payment::orderBy('priority', 'desc')->get();
        return view('frontend.pages.checkout', compact('payments'));
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('frontend.pages.invoice',compact('order'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name'  => 'required',
            'phone_no'  => 'required',
            'shipping_address'  => 'required',
            'payment_method'  => 'required'
        ]);

        $order = new Order();
        if ($request->payment_method != 'cash_in') {
            if ($request->transaction_id == NULL || empty($request->transaction_id)) {
                session()->flash('sticky_error', 'Please give transaction ID for your payment');
                return back();
            }
        }

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone_no = $request->phone_no;
        $order->shipping_address = $request->shipping_address;
        $order->message  = $request->message;

        $order->ip_address = request()->ip();
        $order->transaction_id = $request->transaction_id;

        if (Auth::check()) {
            $order->user_id = Auth::id();
        }

        $order->payment_id = Payment::where('short_name', $request->payment_method)->first()->id;
        $order->save();

        $order_id = $order->id;
        if (isset($request->order_products)) {
            foreach(array_combine($request->order_products, $request->product_quantity) as $product_id=>$quantity) {
                $order_details = new Order_detail();
                $order_details->order_id = $order_id;
                $order_details->product_id = $product_id;
                $order_details->product_quantity = $quantity;
                $order_details->save();
            }
        }

        foreach (Cart::totalCarts() as $cart) {
            if (Auth::check()) {
                if ($cart->user_id == Auth::id()) {
                    $cart->delete();
                }
            }else if ($cart->ip_address == $order->ip_address) {
                $cart->delete();
            }
        }

       session()->flash('success', 'Your order has taken successfully !!! Please wait admin will soon confirm it.');

        return view('frontend.pages.order_confirmation',compact('order_id'));
//        return redirect()->route('checkout.show',$order_id);
    }

    public function show($id)
    {
        return view('frontend.pages.order_confirmation');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
