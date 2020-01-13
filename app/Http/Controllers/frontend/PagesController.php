<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Category;
use App\Models\Subcategory;

class PagesController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $orders = Order::orderBy('id', 'desc')->get();

        return view('frontend.pages.index',compact('products','orders'));
    }

    public function products()
    {
        $products = Product::paginate(4);
        $categories = Product::all();
        return view('frontend.pages.products',compact('products','categories'));
    }

    public function single_product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product_id = $product->id;
        $productImage = ProductImage::where('product_id',$product_id)->get();
        return view('frontend.pages.single_product',compact('product','productImage'));
    } 

    public function category($cat_id)
    {
        $products = Product::where('category_id', $cat_id)->paginate(4);
        return view('frontend.pages.category',compact('products'));
    }

    public function sub_category($sub_slug, $sub_cat_slug)
    {
        $subcategory = Subcategory::where('slug', $sub_cat_slug)->first();
        $products = Product::where('sub_category_id', $subcategory->id)->paginate(4);
        return view('frontend.pages.sub_category',compact('products'));
    }

    public function search(Request $request)
    {

        $sub_cat_slug = $request->category;
        $title = $request['query'];
        $subcategory = Subcategory::where('slug', $sub_cat_slug)->first();

        $products = Product::orderByDesc('id')
                        ->Where('sub_category_id', 'LIKE', '%' . $subcategory->id . '%')
                        ->Where(function ($query) use ($title) {
                            $query->where('title', 'LIKE', '%' . $title . '%')
                                    ->orWhere('price', 'LIKE', '%' . $title . '%');
                            })
                        ->Where([
                            ['status',1]
                        ])
                        ->paginate(5);
        $products->appends ( array (
                'title' => $title
        ));
        return view('frontend.pages.search_product',compact('products'));
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
