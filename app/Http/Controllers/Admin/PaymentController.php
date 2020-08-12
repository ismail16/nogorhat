<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Order;


class PaymentController extends Controller
{
    public function index()
    {

        $payments = Payment::orderBy('id', 'desc')->get();
        return view('admin.payment.index', compact('payments'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $payment = Payment::find($id);
        return view('admin.payment.index', compact('payment'));
    }

    public function edit($id)
    {
        $payment = Payment::find($id);
        return view('admin.payment.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {

        $payment = Payment::find($id);
        $payment->status = $request->payment_status;
        $payment->save();

        $order = Order::find($payment->order_id);
        $order->is_paid = 1;
        $order->save();

        return redirect()->route('admin.order.index');
    }

    public function destroy($id)
    {

    }
}
