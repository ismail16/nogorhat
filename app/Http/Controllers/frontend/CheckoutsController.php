<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class CheckoutsController extends Controller
{

    public function index()
    {
        return view('frontend.pages.checkout');
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('frontend.pages.invoice',compact('order'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $order = new Order();

        if($request->sell_my_self == 1 && Auth::check()){
            $user_id = Auth::id();
            $user = User::find($user_id);

            $order->name = $user->name;
            $order->email = $user->email;
            $order->phone_no = $user->phone;
            $order->shipping_address = $user->address;
            $order->ip_address = request()->ip();

            $order->save();
        }else{
            $this->validate($request, [
                'name'  => 'required',
                'phone_no'  => 'required',
                'shipping_address'  => 'required'
            ]);
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone_no = $request->phone_no;
            $order->shipping_address = $request->shipping_address;
            $order->message  = $request->message;
            $order->ip_address = request()->ip();
            $order->save();
        } 

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
        session()->flash('success', 'Your order has taken successfully !!! Please wait admin will soon confirm it.');
        return view('frontend.pages.payment_pay_now',compact('order_id'));
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
