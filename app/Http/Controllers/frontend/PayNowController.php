<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Payment;
use Auth;
use Session;
use Stripe;

class PayNowController extends Controller
{


    public function payment_pay_now()
    {
        return view('frontend.pages.payment_pay_now');
    }

    public function payment_pay_store(Request $request){

        // return $request;
        // return $request->stripeToken;
        Stripe\Stripe::setApiKey('sk_test_HETvnHVWPE2yxioaiobPi25k00uvh64zC3');
        try{
            $data = Stripe\Charge::create ([
                "amount" => $request->totalAmount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Pay Against this Paper ID: ".$request->order_id
            ]);
        }catch (\Exception $e){

            return  $e;
            Session::flash('danger', 'The system is not accepting your card/payment method!');
            return back();
        }

        return $data;



        $billing_name = $request->holder_name;
        if (Auth::check()) {
            $order->user_id = Auth::id();
            $email = Auth::user()->email;
        }
        $ip_address = request()->ip();
        $order_id = $request->order_id;

        $payment_id = $data->id;
        $transaction_id = $data->balance_transaction;
        $payment_method = $data->payment_method;
        $info = $data->receipt_url;
        $amount = $data->amount;
        $pay_type = $data->source->object;
        $card_type = $data->source->brand;
        $fingerprint = $data->source->fingerprint;
        $last4 = $data->source->last4;



        $stripe = new \App\Models\Stripe();
        $stripe->user_id = Auth::user()->id;
        $stripe->order_id = $order_id;
        $stripe->card_holder_name = $billing_name;
        $stripe->payment_id = $payment_id;
        $stripe->transaction_id = $transaction_id;
        $stripe->payment_method = $payment_method;
        $stripe->amount = $amount;
        $stripe->receipt_url = $info;
        $stripe->pay_type = $pay_type;
        $stripe->card_type = $card_type;
        $stripe->fingerprint = $fingerprint;
        $stripe->last4 = $last4;
        $stripe->save();

        DB::table('submits')->where('paper_id', $paper_id)->update(['is_payment' => 1]);
        Mail::to($email)->queue(new PaymentConfirm($paper_id, $payment_id, $billing_name, $amount, $info));
        Session::flash('success', 'Payment Successful! Please check your email');
        return redirect()->route('author.paper-submission.index');
    }

    public function payment_pay_store00(Request $request)
    {

        $request->name;












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
}
