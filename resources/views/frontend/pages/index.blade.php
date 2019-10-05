@extends('frontend/layouts/master')

@section('content')
{{--    @include('frontend/partials/navbar')--}}
<div class="home_two_block_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <!--banner slider start-->
                <div class="banner_slider mb-40">
                    <div class="slider_active owl-carousel">
                        <!--   <div class="single_slider single_sl_two" style="background-image: url(/frontend_assets/assets/img/slider/slider3.jpg)"> -->

                        <div class="single_slider single_sl_two" style="background-image: url('{{ asset('frontend_assets/assets/img/slider/slider3.jpg')}}');">
                            <div class="row">
                                <div class="col-lg-7 offset-lg-5 col-md-8 offset-md-4">
                                    <div class="slider_content slider_c_two">
                                        <h2>new furniture !</h2>
                                        <h1>50 % off</h1>
                                        <div class="slider_button">
                                            <a href="#">shop it! </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_slider single_sl_two" style="background-image: url('{{ asset('frontend_assets/assets/img/slider/slider4.jpg')}}');">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-5 col-md-8 offset-md-4">
                                    <div class="slider_content sale_c_two sale">
                                        <h2>Tablets </h2>
                                        <h1>Sale </h1>
                                        <div class="slider_desc_up ">
                                            <p>Up to 40 % off on all tablets </p>
                                        </div>
                                        <div class="slider_button">
                                            <a href="#">shop it! </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--banner slider end-->
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="product_banner product_banner_two fix mb-40">
                    <a href="#"><img src="http://127.0.0.1:8000/frontend_assets/assets/img/banner/banner1.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach( \App\Models\Category::all() as $category)
            <div class="col-lg-12 col-md-12">
                <div class="featured_area featured_three mb-40">
                    <div class="top_title title_three">
                        <h2> shop by {{ $category->name }}</h2>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-2 col-md-6">
                            <div class="hot_category hot_ct_three">
                                <h4>Sub Category</h4>
                                <ul style="border-bottom: 1px solid #dddddd; padding-bottom: 10px;">
                                    @foreach( \App\Models\Subcategory::Where('category_id', $category->id)->get() as $subcategory)
                                        <li><a href="#">{{ $subcategory->name }}</a></li>
                                    @endforeach
                                </ul>
                                <img src="{{asset('images/category_image/'.$category->image)}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <div class="featured_left fetured_l_three">
                                <div class="featured_produt featured_product_three">
                                    <div class="featured_active_three owl-carousel">
                                        @foreach( \App\Models\Product::Where('category_id', $category->id)->get() as $prodect)
                                            <div class="single_featured ">
                                                <div class="single_product s_product_three card mr-2">
                                                    <div class="product_thumb">
                                                        @php
                                                            $product_image = \App\Models\ProductImage::Where('product_id',$prodect->id)->first()->image
                                                        @endphp
                                                        <a href="single-product.html"><img src="{{ asset('images/product_image/'.$product_image) }}" alt=""></a>
                                                        <div class="product_discount">
                                                            <span>New</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" title=" Add to Compare "><i class="fa fa-retweet"></i></a></li>
                                                                <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content p_content_three">
                                                        <div class="samll_product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                                                            <a title="Printed Summer Dress" href="single-product.html">{{ $prodect->title }}</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> Tk {{ $prodect->price }} </span>
                                                        </div>
                                                    </div>
                                                    <div class="_card-footer" style="padding: 5px !important;">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <button class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</button>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <form class="" action="{{ route('cart.store') }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="product_id" value="">
                                                                    <button class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> ADD</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
@endsection
