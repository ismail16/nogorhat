<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subscription;
use App\Models\Slider;
use App\Models\ProductReview;
use App\Models\About;
use App\Models\Setting;

use App\Models\TermsCondition;
use App\Models\ReturnReplacement;
use App\Models\PrivacyPolicy;

use Session;

class PagesController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $orders = Order::orderBy('id', 'desc')->get();
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('frontend.pages.index',compact('products','orders','sliders'));
    }

    public function products()
    {
        $products = Product::paginate(4);
        $categories = Product::all();
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('frontend.pages.products',compact('products','categories','sliders'));
    }

    public function single_product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product_id = $product->id;
        $productImage = ProductImage::where('product_id',$product_id)->get();
        $product_reviews = ProductReview::where('product_id',$product_id)->get();
        return view('frontend.pages.single_product',compact('product','productImage','product_reviews'));
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
        if ($subcategory) {
            $subcategory_id = $subcategory->id;
        }else{
            $subcategory_id = '';
        }

        $products = Product::orderByDesc('id')
                        ->Where('sub_category_id', 'LIKE', '%' . $subcategory_id . '%')
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
        $setting = Setting::first();
        return view('frontend.pages.contact',compact('setting'));
    }

    public function about()
    {
        $abouts = About::all();
        return view('frontend.pages.about', compact('abouts'));
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function terms_conditions()
    {
        $terms_conditions = TermsCondition::all();
        return view('frontend.pages.terms_conditions',compact('terms_conditions'));
    } 

    public function privacy_policy()
    {
        $privacy_policies = PrivacyPolicy::all();
        return view('frontend.pages.privacy_policy',compact('privacy_policies'));
    }

    public function returns_replacement()
    {
        $return_replacements = ReturnReplacement::all();
        return view('frontend.pages.returns_replacement',compact('return_replacements'));
    }

    public function subscribtion(Request $request)
    {

        $subscription = new Subscription;
        $subscription->ip = $request->ip_address;
        $subscription->email = $request->email;

        try {
            $subscription->save();
            return response()->json(['success' => 'Subscribe Successfully !!'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e], 404);
        }

        
        
    }

    public function product_review_post(Request $request)
    {

        $ProductReview = new ProductReview;
        $ProductReview->product_id = $request->product_id;
        $ProductReview->rating = $request->rating;
        $ProductReview->name = $request->name;
        $ProductReview->email = $request->email;
        $ProductReview->review = $request->review;
        $ProductReview->status = 0;

        $ProductReview->save();
        Session::flash('message', 'Thank You For Rating!');
        return back();        
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
