<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index()
    {
        $products = Product::all();

//        return $products;

        return view('frontend.pages.index',compact('products'));
    }

    public function products()
    {
        return view('frontend.pages.products');
    }

    public function producs1($id)
    {
        $product = Product::find($id);
        $productImage = ProductImage::where('product_id',$id)->get();
//        return $productImage;
        return view('frontend.pages.single_product',compact('product','productImage'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function terms_conditions()
    {
        return view('frontend.pages.terms_conditions');
    }

    public function returns_replacement()
    {
        return view('frontend.pages.returns_replacement');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
