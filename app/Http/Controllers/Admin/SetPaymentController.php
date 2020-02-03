<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\PaypalSet;
use App\Models\StripeSet;
use App\Models\twoCheckoutSet;
use App\Models\CashOnDeliverySet;

class SetPaymentController extends Controller
{


    public function paypalEdit($id)
    {
        $paypal = PaypalSet::first();
        return view('admin.SetPayment.paypal',compact('paypal'));
    }

    public function paypalUpdate(Request $request, $id)
    {
        $paypal = PaypalSet::find($id);
        $paypal->title = 'Paypal';
        $paypal->ClientId = $request->ClientId;
        $paypal->currency = 'USD';
        $paypal->Secret = $request->Secret;
        $paypal->Description = 'Set Paypal Account !!';
        $paypal->Status = $request->Status;
        $paypal->SandboxStatus = $request->SandboxStatus;
        $paypal->save();
        return back()->with('message', 'Paypal Payment Configured Successfully !');
    }

    public function stripeEdit($id)
    {
        $stripe = StripeSet::first();
        return view('admin.SetPayment.stripe',compact('stripe'));
    }

    public function stripeUpdate(Request $request, $id)
    {
        $stripe = StripeSet::find($id);
        $stripe->title = 'Stripe';
        $stripe->SecretKey = $request->SecretKey;
        $stripe->PublishableKey = $request->PublishableKey;
        $stripe->Description = 'Set Stripe Account !!';
        $stripe->Status = $request->Status;
        $stripe->SandboxStatus = $request->SandboxStatus;
        $stripe->save();
        return back()->with('message', 'Stripe Payment Configured Successfully !');
    }


    public function twoCheckoutEdit($id)
    {
        $twoCheckout = twoCheckoutSet::first();
        return view('admin.SetPayment.twoCheckout',compact('twoCheckout'));
    }

    public function twoCheckoutUpdate(Request $request, $id)
    {
        $twoCheckout = twoCheckoutSet::find($id);
        $twoCheckout->title = 'twoCheckout';
        $twoCheckout->SellerId = $request->SellerId;
        $twoCheckout->PrivateKey = $request->PrivateKey;
        $twoCheckout->PublishableKey = $request->PublishableKey;
        $twoCheckout->Description = 'Set twoCheckout Account !!';
        $twoCheckout->status = $request->status;
        $twoCheckout->SandboxStatus = $request->SandboxStatus;
        $twoCheckout->save();
        return back()->with('message', 'twoCheckout Payment Configured Successfully !');
    }

    public function CashOnDeliveryEdit($id)
    {
        $CashOnDelivery = CashOnDeliverySet::first();
        return view('admin.SetPayment.CashOnDelivery',compact('CashOnDelivery'));
    }

    public function CashOnDeliveryUpdate(Request $request, $id)
    {
        
        $CashOnDelivery = CashOnDeliverySet::find($id);
        $CashOnDelivery->title = $request->title;
        $CashOnDelivery->description = $request->description;
        $CashOnDelivery->status = $request->status;
        $CashOnDelivery->save();
        return back()->with('message', 'Cash On Delivery Payment Configured Successfully !');
    }

}
