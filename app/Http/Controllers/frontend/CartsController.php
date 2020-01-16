<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CartsController extends Controller
{

    public function index()
    {
        return view('frontend.pages.carts');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        $this->validate($request, [
//            'product_id' => 'required'
//            ],
//            [
//                'product_id.required' => 'Please Give a product'
//            ]
//        );

        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->first();
        }else {
            $cart = Cart::where('ip_address', request()->ip())
                ->where('product_id', $request->product_id)
                ->first();
        }

        if (!is_null($cart)) {
            $cart->increment('product_quantity');
        }else {
            $cart = new Cart();
            if (Auth::check()) {
                $cart->user_id = Auth::id();
            }

            $cart->ip_address = request()->ip();
            $cart->product_id = $request->product_id;
            if ($request->product_quantity){
                $cart->product_quantity = $request->product_quantity;
            }
            $cart->save();
        }
        session()->flash('success', 'Product has add to cart !!');
        if ($request->search_product == 'search_product') {
            return redirect('/');
        }else{
            return back();
        }
    }

    public function show($id)
    {
        return response("show");
    }

    public function edit($id)
    {
         return response("edit");

    }

    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);

        if (!is_null($cart)) {
            $cart->product_quantity = $request->product_quantity;
            $cart->save();
//            return $cart;
        }else {
            return back();
        }
        session()->flash('success', 'Cart item has updated successfully !!');
        return $cart;
    }

    public function delete($id)
    {
//        return $id;
        $cart = Cart::find($id);
        if (!is_null($cart)) {
            $cart->delete();
        }else {
            return back();
        }
        session()->flash('success', 'Cart item has deleted !!');
        return $cart;
    }
}
