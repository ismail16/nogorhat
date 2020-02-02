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
        //
    }

    public function stripeEdit($id)
    {
        $stripe = StripeSet::first();
        return view('admin.SetPayment.stripe',compact('stripe'));
    }

    public function stripeUpdate(Request $request, $id)
    {
        //
    }


    public function twocheckoutEdit($id)
    {
        $twoCheckout = twoCheckoutSet::first();
        return view('admin.SetPayment.twoCheckout',compact('twoCheckout'));
    }

    public function twocheckoutUpdate(Request $request, $id)
    {
        //
    }

    public function CashOnDeliveryEdit($id)
    {
        $CashOnDelivery = CashOnDeliverySet::first();
        return view('admin.SetPayment.CashOnDelivery',compact('CashOnDelivery'));
    }

    public function CashOnDeliveryUpdate(Request $request, $id)
    {
        //
    }

}
