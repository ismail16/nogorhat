<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use  App\Models\Product;
use App\Models\ProductImage;
use App\Models\Subcategory;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $suppliers = Supplier::orderBy('id', 'desc')->get();
        return view('admin.product.create', compact('categories','subcategories','suppliers'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->old_price = $request->old_price;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->supplier_id = $request->supplier_id;
        $product->description = $request->description;
        $product->slug =  str_slug($product->title);
        $product->author =  'admin';
        $product->publisher =  'admin';
        $product->status =  1;
        $product->save();

        if (count($request->image) > 0) {
            $image_no = 0;
            foreach ($request->image as $image) {
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $product->slug.'-image-'. $image_no .'.' . $ext;
                $upload_path = 'images/product_image/';
                $success = $image->move($upload_path, $image_full_name);
                if ($success) {
                    $product_image = new ProductImage;
                    $product_image->product_id = $product->id;
                    $product_image->image = $image_full_name;
                    $product_image->save();
                }
                $image_no++;
            }
        }
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $suppliers = Supplier::orderBy('id', 'desc')->get();
        return view('admin.product.edit', compact('product','categories','subcategories','suppliers'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,png',
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)){
            unlink('images/category_image/'.$category->image);
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('images/category_image')){
                mkdir('images/category_image', 777, true);
            }
            $image->move('images/category_image',$imagename);
        }else{
            $imagename = $category->image;
        }

        $category->update(
            [
                'name' => $request->name,
                'slug' => $slug,
                'image' => $imagename,
                'status' => $request->status,
            ]
        );

        return redirect()->route('admin.product.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (file_exists('images/category_image/'.$category->image)){
            unlink('images/category_image/'.$category->image);
        }
        $category->delete();
        return back()->with('message', 'Category Deleted Successfully !');;
    }
}
