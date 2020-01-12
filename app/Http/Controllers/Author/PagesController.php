<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\User;
use Auth;

class PagesController extends Controller
{

    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('author.pages.index',compact('orders'));
    }
    
    public function orders()
    {
        $orders = Order::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
        return view('author.pages.orders', compact('orders'));
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
