<?php

namespace App\Http\Controllers\api;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function allProducts(){
        $products = Product::orderBy('id','DESC')->get();
        return $products;
    }
    public function singleProducts($id){
        $product = Product::where('id',$id)->first();
        return $product;
    }
    public function productImages(){
        $productImages = ProductImage::orderBy('id','DESC')->get();
        return $productImages;
    }
    public function productImage($id){
        $productImage = ProductImage::where('product_id',$id)->get();
        return $productImage;
    }
}
