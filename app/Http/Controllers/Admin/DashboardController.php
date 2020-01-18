<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(){
    	$orders = Order::orderBy('id', 'desc')->get();
    	$products = Product::orderBy('id', 'desc')->get();
    	$users = User::orderBy('id', 'desc')->where('role_id', 2)->get();
    	$categories = Category::orderBy('id', 'desc')->get();
        return view('admin.dashboard',compact('orders','products','users','categories'));
    }
}
