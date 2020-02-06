<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\User;
use Auth;

class PagesController extends Controller
{

    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
        $payments = Payment::orderBy('id', 'desc')->where('user_id', Auth::id())->where('status', 1)->get();
        return view('author.pages.index',compact('orders','payments'));
    }
    
    public function orders()
    {
        $orders = Order::orderBy('id', 'desc')->where('status', 1)->where('user_id', Auth::id())->get();

        // return $orders;
        return view('author.pages.orders', compact('orders'));
    }

    public function order_delete($id)
    {
        $order = Order::find($id);
        $order->status = 0;
        $order->save();
        return back()->with('message', 'Order Deleted Successfully !');
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('author.pages.invoice', compact('order'));
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('author.pages.profile', compact('user'));
    }
}
