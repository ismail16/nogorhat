<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Payment;
use App\User;
use Auth;
use Session;
use Stripe;
use Twocheckout;
use Twocheckout_Charge;

class PayNowController extends Controller
{


    public function payment_pay_now()
    {
        return view('frontend.pages.payment_pay_now');
    }
    public function payment_pay_now_order($id)
    {
        $order = Order::find($id);
        $order_details = Order_detail::Where('order_id', $id)->get();
        return view('frontend.pages.payment_pay_now_order', compact('order','order_details'));
    }

    public function payment_pay_store(Request $request){

        // $this->validate($request, [
        //     'name'  => 'required',
        //     'phone_no'  => 'required',
        //     'shipping_address'  => 'required',
        //     'payment_method'  => 'required'
        // ]); 

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

        $order_id = $request->order_id;
        $billing_name = $request->holder_name;
        if (Auth::check()) {
            $user_id = Auth::id();
        }else{
            $user_id = request()->ip();
        }
        $payment_id = $data->id;
        $transaction_id = $data->balance_transaction;
        $payment_method = $data->payment_method;
        $amount = $data->amount;
        $receipt_url = $data->receipt_url;
        $pay_type = $data->source->object;
        $card_type = $data->source->brand;
        $last4 = $data->source->last4;

        $payment = new Payment;
        $payment->order_id = $order_id;
        $payment->name = $billing_name;
        $payment->user_id = $user_id;
        $payment->payment_id = $payment_id;
        $payment->transaction_id = $transaction_id;
        $payment->payment_method = $payment_method;
        $payment->amount = $amount;
        $payment->receipt_url = $receipt_url;
        $payment->pay_type = $pay_type;
        $payment->card_type = $card_type;
        $payment->last4 = $last4;
        $payment->save();

        // Cart::orWhere('user_id', Auth::id())->orWhere('ip_address', request()->ip())->delete();

        return view('frontend.pages.order_confirmation', compact('order_id'));
    }

    public function payment_pay_cash_in(Request $request){

        // $this->validate($request, [
        //     'name'  => 'required',
        //     'phone_no'  => 'required',
        //     'shipping_address'  => 'required',
        //     'payment_method'  => 'required'
        // ]);

        // if ($request->payment_method != 'cash_in') {
        //     if ($request->transaction_id == NULL || empty($request->transaction_id)) {
        //         session()->flash('sticky_error', 'Please give transaction ID for your payment');
        //         return back();
        //     }
        // }      

        $order_id = $request->order_id;
        if (Auth::check()) {
            $user_id = Auth::id();
            $user = User::find($user_id);

            $billing_name = $user->name;
            if ($request->transaction_id) {
               $transaction_id  = $request->transaction_id;
            }else{
                $transaction_id  = 'cash-in-delivery';
            }

        }else{
            $order = Order::find($order_id);
            $billing_name = $order->name;
            $user_id = request()->ip();
             if ($request->transaction_id) {
               $transaction_id  = $request->transaction_id;
            }else{
                $transaction_id  = 'cash-in-delivery';
            }
        }
        $payment_method = $request->payment_method;
        $amount = $request->totalAmount;

        $payment = new Payment;
        $payment->order_id = $order_id;
        $payment->name = $billing_name;
        $payment->user_id = $user_id;
        $payment->transaction_id = $transaction_id;
        $payment->payment_method = $payment_method;
        $payment->amount = $amount;
        $payment->save();

        $order = Order::find($order_id);
        $order->payment_id = $payment->id;
        $order->transaction_id = $transaction_id;
        $order->save();

        Cart::orWhere('user_id', Auth::id())->orWhere('ip_address', request()->ip())->delete();

        return view('frontend.pages.order_confirmation', compact('order_id'));
    }


    public function payment_pay_2checkout(Request $request){

        Twocheckout::privateKey('EA49AA15-9D41-46FF-A535-91879012A3AC');
        Twocheckout::sellerId('901418658');
        Twocheckout::sandbox(true);

        try {
            $charge = Twocheckout_Charge::auth(array(
                "merchantOrderId" => $request->order_id,
                "token" => $request->token,
                "currency" => 'USD',
                "total" => $request->totalAmount,
                "billingAddr" => array(
                    "name" => $request->card_holder_name,
                    "addrLine1" => '123 Test St',
                    "city" => 'Columbus',
                    "state" => 'OH',
                    "zipCode" => '43123',
                    "country" => 'USA',
                    "email" => 'testingtester@2co.com',
                    "phoneNumber" => '555-555-5555'
                )
            ));

            if ($charge['response']['responseCode'] == 'APPROVED') {
                $payment = new Payment;
                $payment->order_id = $request->order_id;
                $payment->name = $request->card_holder_name;
                // $payment->user_id = $user_id;
                $payment->transaction_id = $charge['response']['transactionId'];
                $payment->payment_method = "card";
                $payment->amount = $charge['response']['total'];
                $payment->save();

                $order = Order::find($request->order_id);
                $order->payment_id = $payment->id;
                $order->transaction_id = $charge['response']['transactionId'];
                $order->save();
                $order_id = $order->id;

                // Cart::orWhere('user_id', Auth::id())->orWhere('ip_address', request()->ip())->delete();

                return view('frontend.pages.order_confirmation', compact('order_id'));
            }else{
                session()->flash('error', 'Your card not APPROVED !!!.');
            }

           
            // $this->assertEquals('APPROVED', $charge['response']['responseCode']);
        } catch (Twocheckout_Error $e) {
            session()->flash('error', $e->getMessage());
            return back();
            // $this->assertEquals('Unauthorized', $e->getMessage());
        }
    }


}
