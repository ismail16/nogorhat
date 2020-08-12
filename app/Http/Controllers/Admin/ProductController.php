<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use  App\Models\Product;
use App\Models\ProductImage;
use App\Models\Subcategory;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

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
        return back()->with('message', 'Product Saved Successfully !');
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
        $product = Product::find($id);
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
        $product->status = $request->status;
        $product->save();

        $image0 = $request->file('product_image0');
        if ($image0) {
            if(File::exists('images/product_image/'.$request->product_image00))
            {
                File::delete('images/product_image/'.$request->product_image00);
            }
            $ext = strtolower($image0->getClientOriginalExtension());
            $image_full_name = $product->slug.'-image-'. '0' .'.' . $ext;
            $upload_path = 'images/product_image/';
            $success = $image0->move($upload_path, $image_full_name);
            if ($success) {
                $product_image = ProductImage::find($request->product_id00);
                $product_image->image = $image_full_name;
                $product_image->save();
            }
        }
        $image1 = $request->file('product_image1');
        if ($image1) {
            if(File::exists('images/product_image/'.$request->product_image11))
            {
                File::delete('images/product_image/'.$request->product_image11);
            }
            $ext = strtolower($image1->getClientOriginalExtension());
            $image_full_name = $product->slug.'-image-'. '1' .'.' . $ext;
            $upload_path = 'images/product_image/';
            $success = $image1->move($upload_path, $image_full_name);
            if ($success) {

                $product_image = ProductImage::find($request->product_id11);
                $product_image->image = $image_full_name;
                $product_image->save();
            }
        }

        $image2 = $request->file('product_image2');
        if ($image2) {
            if(File::exists('images/product_image/'.$request->product_image22))
            {
                File::delete('images/product_image/'.$request->product_image22);
            }
            $ext = strtolower($image2->getClientOriginalExtension());
            $image_full_name = $product->slug.'-image-'. '2' .'.' . $ext;
            $upload_path = 'images/product_image/';
            $success = $image2->move($upload_path, $image_full_name);
            if ($success) {
                $product_image = ProductImage::find($request->product_id22);
                $product_image->image = $image_full_name;
                $product_image->save();
            }
        }

        $image3 = $request->file('product_image3');
        if ($image3) {
            if(File::exists('images/product_image/'.$request->product_image33))
            {
                File::delete('images/product_image/'.$request->product_image33);
            }
            $ext = strtolower($image3->getClientOriginalExtension());
            $image_full_name = $product->slug.'-image-'. '3' .'.' . $ext;
            $upload_path = 'images/product_image/';
            $success = $image3->move($upload_path, $image_full_name);
            if ($success) {
                $product_image = ProductImage::find($request->product_id33);
                $product_image->image = $image_full_name;
                $product_image->save();
            }
        }

        $image4 = $request->file('product_image4');
        if ($image4) {
            if(File::exists('images/product_image/'.$request->product_image44))
            {
                File::delete('images/product_image/'.$request->product_image44);
            }
            $ext = strtolower($image4->getClientOriginalExtension());
            $image_full_name = $product->slug.'-image-'. '4' .'.' . $ext;
            $upload_path = 'images/product_image/';
            $success = $image4->move($upload_path, $image_full_name);
            if ($success) {
                $product_image = ProductImage::find($request->product_id44);
                $product_image->image = $image_full_name;
                $product_image->save();
            }
        }
        return redirect()->route('admin.product.index')->with('message', 'Product Updated Successfully !');
    }

    public function destroy($id)
    {
        $ProductImages=ProductImage::where('product_id',$id)->get();
        if (!is_null($ProductImages)) {
            foreach ($ProductImages as  $ProductImage) {
                if(File::exists('images/product_image/'.$ProductImage->image))
                {
                    File::delete('images/product_image/'.$ProductImage->image);
                }
                $ProductImage->delete();
            }
        }
        $Product = Product::find($id);
        $Product->delete();
        return back()->with('message', 'Product Deleted Successfully !');
    }
}
