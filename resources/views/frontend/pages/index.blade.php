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
            <div class="col-lg-12 col-md-12">
                <div class="featured_area featured_three mb-40">
                    <div class="container">
                        <div class="top_title title_three">
                            <h2> shop by electronic</h2>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-lg-2 col-md-6">
                                <div class="hot_category hot_ct_three" style="background-image: url(frontend_assets/assets/img/banner/banner11.jpg)">
                                    <h2>Hot Category</h2>
                                    <ul>
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">TV, Audio & Home Theater</a></li>
                                        <li><a href="#">Camera, Photo & Video</a></li>
                                        <li><a href="#">Computers & Accessories</a></li>
                                        <li><a href="#">Cell Phones & Accessories</a></li>
                                        <li><a href="#">Business & Office Electronics</a></li>
                                        <li><a href="#">Software</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12">
                                <div class="featured_left fetured_l_three">
                                    <div class="featured_produt featured_product_three">
                                        <div class="featured_active_three owl-carousel">
                                            <div class="single_featured">
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product40.jpg') }}" alt=""></a>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">Aliquam furniture</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product41.jpg')}}" alt=""></a>
                                                        <div class="product_discount">
                                                            <span>-10%</span>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product42.jpg')}}" alt=""></a>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product43.jpg')}}" alt=""></a>
                                                        <div class="product_discount">
                                                            <span>-10%</span>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">Dignissim furniture</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $130.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product9.jpg')}}" alt=""></a>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">hanbag flit</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product10.jpg')}}" alt=""></a>
                                                        <div class="product_discount">
                                                            <span>-10%</span>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">Dignissim furniture</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product11.jpg')}}" alt=""></a>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $130.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product s_product_three">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product12.jpg')}}" alt=""></a>
                                                        <div class="product_discount">
                                                            <span>-10%</span>
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured_left featured_left_two mb-40">
                    <div class="top_title">
                        <h2> Featured products</h2>
                    </div>
                    <div class="featured_produt featured_p_two">
                        <div class="featured_active_two owl-carousel">
                            <div class="single_featured">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product13.jpg')}}" alt=""></a>
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
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product7.jpg')}}" alt=""></a>
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
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="single-product.html">coat men</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $142.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product9.jpg')}}" alt=""></a>
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
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="single-product.html">chair furniture</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="single_featured">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product11.jpg')}}" alt=""></a>
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
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="single-product.html">coareet lobortis</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
