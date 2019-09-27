@extends('frontend/layouts/master')

@section('content')
    @include('frontend/partials/navbar')
    <div class="col-lg-3 col-md-4">
        <div class="product_banner product_banner_two fix mb-40">
            <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner1.jpg')}}" alt=""></a>
        </div>
        <!--product banner end-->
        <!--Bestseller small product start-->
        <div class="top_sellers top_seller_two featured mb-40">
            <div class="top_title">
                <h2> Bestseller</h2>
            </div>
            <div class="small_product_active owl-carousel">
                <div class="small_product_item">
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart13.jpg')}}" alt=""></a>
                            <div class="product_discount">
                                <span>-10%</span>
                            </div>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html"> Summer Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                                <span class="old_price">  $30.50  </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart1.jpg')}}" alt=""></a>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Faded T-shirt</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart2.jpg')}}" alt=""></a>
                            <div class="product_discount">
                                <span>-10%</span>
                            </div>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Printed Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                                <span class="old_price">  $30.50  </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart3.jpg')}}" alt=""></a>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Summer Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart5.jpg')}}" alt=""></a>
                            <div class="product_discount">
                                <span>-10%</span>
                            </div>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Summer Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small_product_item">
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart4.jpg')}}" alt=""></a>
                            <div class="product_discount">
                                <span>-10%</span>
                            </div>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Printed Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                                <span class="old_price">  $30.50  </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart10.jpg')}}" alt=""></a>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html"> Summer Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart8.jpg')}}" alt=""></a>
                            <div class="product_discount">
                                <span>-10%</span>
                            </div>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Printed Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                                <span class="old_price">  $30.50  </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart7.jpg')}}" alt=""></a>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Summer Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                                <span class="old_price">  $30.50  </span>
                            </div>
                        </div>
                    </div>
                    <div class="small_product">
                        <div class="small_product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/cart/cart8.jpg')}}" alt=""></a>
                            <div class="product_discount">
                                <span>-10%</span>
                            </div>
                        </div>
                        <div class="small_product_content">
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
                                <a title="Printed Summer Dress" href="single-product.html">Printed  Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $27.00 </span>
                                <span class="old_price">  $30.50  </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Bestseller small product end-->
        <!--blog post area start-->
        <div class="top_title mb-30">
            <h2> Blog Posts</h2>
        </div>
        <div class="blog_active_two owl-carousel mb-40">
            <div class="single_blog single_blog_two">
                <div class="blog_thumb">
                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/assets/img/blog/blog1.jpg')}}" alt=""></a>
                </div>
                <div class="blog_content">
                    <h4 class="blog_title"><a href="blog-details.html">Share the Love for PrestaShop 1.6</a></h4>
                    <p class="blog_desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                    <div class="blog_post blog_p_two">
                        <ul>
                            <li class="post_date">Dec 01</li>
                            <li class="read_more"><a href="blog-details.html">Read More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single_blog single_blog_two">
                <div class="blog_thumb">
                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/assets/img/blog/blog4.jpg')}}" alt=""></a>
                </div>
                <div class="blog_content">
                    <h4 class="blog_title"><a href="blog-details.html">Share the Love for PrestaShop 1.6</a></h4>
                    <p class="blog_desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                    <div class="blog_post blog_p_two">
                        <ul>
                            <li class="post_date">Dec 01</li>
                            <li class="read_more"><a href="blog-details.html">Read More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single_blog single_blog_two">
                <div class="blog_thumb">
                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/assets/img/blog/blog2.jpg')}}" alt=""></a>
                </div>
                <div class="blog_content">
                    <h4 class="blog_title"><a href="blog-details.html">Share the Love for PrestaShop 1.6</a></h4>
                    <p class="blog_desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                    <div class="blog_post blog_p_two">
                        <ul>
                            <li class="post_date">Dec 01</li>
                            <li class="read_more"><a href="blog-details.html">Read More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--blog post area end-->
        <!--barnd logo area start-->
        <div class="brand_logo brand_logo_two">
            <div class="top_title">
                <h2> logo brands</h2>
            </div>
            <div class="brand_active_two owl-carousel">
                <div class="single_brand_item">
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand4.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand5.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="single_brand_item">
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand4.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/brand/brand5.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!--barnd logo area end-->


    </div>
    <div class="col-lg-9 col-md-8">
    <!--hot deals product area-->
    <div class="product_inner product_inner_two mb-40">
        <div class="top_title">
            <h2> hot deals</h2>
        </div>
        <div class="row">
            <div class="product_active owl-carousel">
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product1.jpg')}}" alt=""></a>
                            <div class="product_discount">
                                <span>-10%</span>
                            </div>
                            <div class="product_action">
                                <ul>
                                    <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"  title=" Add to Compare "><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="quick_view">
                                <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                            </div>

                        </div>
                        <div class="product_content">
                            <div class="product_timing">
                                <div data-countdown="2020/12/15"></div>
                            </div>
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
                                <a title="Printed Summer Dress" href="single-product.html">Printed Summer Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $140.00 </span>
                                <span class="old_price">  $150.50  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product2.jpg')}}" alt=""></a>

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
                            <div class="product_timing">
                                <div data-countdown="2020/12/15"></div>
                            </div>
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
                                <a title="Printed Summer Dress" href="single-product.html">Handbag fringilla</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $130.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product4.jpg')}}" alt=""></a>
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
                        <div class="product_content">
                            <div class="product_timing">
                                <div data-countdown="2020/12/15"></div>
                            </div>
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
                                <a title="Printed Summer Dress" href="single-product.html">Printed  Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $140.00 </span>
                                <span class="old_price">  $150.50  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product3.jpg')}}" alt=""></a>

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
                            <div class="product_timing">
                                <div data-countdown="2020/12/15"></div>
                            </div>
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
                                <a title="Printed Summer Dress" href="single-product.html">Handbag fringilla</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $140.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product5.jpg')}}" alt=""></a>
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
                        <div class="product_content">
                            <div class="product_timing">
                                <div data-countdown="2020/12/15"></div>
                            </div>
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
                                <a title="Printed Summer Dress" href="single-product.html">Printed  Dress</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $140.00 </span>
                                <span class="old_price">  $150.50  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product6.jpg')}}" alt=""></a>

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
                            <div class="product_timing">
                                <div data-countdown="2020/12/15"></div>
                            </div>
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
                                <a title="Printed Summer Dress" href="single-product.html">Handbag fringilla</a>
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
    <!--hot deals product end-->
    <!--banner section two start-->
    <div class="banner_area">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_banner fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner6.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_banner fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner7.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_banner b_three fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner8.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!--banner section two nd-->
    <!--featured product area-->
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
    <!--featured product end-->
    <!--banner section three start-->
    <div class="featured_banner featured_bn_two mb-10">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="feature_banner_box fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner15.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_banner_box fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner16.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_banner_box b_three fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner17.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!--banner section three end-->
    <!--New arrivals products start-->
    <div class="featured_left mb-40">
        <div class="top_title">
            <h2> New arrivals products</h2>
        </div>
        <div class="featured_produt fashion_product">
            <div class="featured_active_two owl-carousel">
                <div class="single_featured">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product20.jpg')}}" alt=""></a>
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
                                <a title="Printed Summer Dress" href="single-product.html">hanbag flit</a>
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
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product21.jpg')}}" alt=""></a>
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
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product22.jpg')}}" alt=""></a>
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
                                <a title="Printed Summer Dress" href="single-product.html">summer dress</a>
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
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product26.jpg')}}" alt=""></a>
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
                                <a title="Printed Summer Dress" href="single-product.html">Aliquam furniture</a>
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
    <!--New arrivals products end-->
    <!--banner section three start-->
    <div class="banner_area">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_banner fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner2.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_banner fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner3.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_banner b_three fix">
                    <a href="#"><img src="{{ asset('frontend_assets/assets/img/banner/banner4.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!--banner section three end-->
    <!--Trending products area start-->
    <div class="featured_left featured_left_two mb-40">
        <div class="top_title">
            <h2> Trending products</h2>
        </div>
        <div class="featured_produt">
            <div class="featured_active_two owl-carousel">
                <div class="single_featured">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product9.jpg')}}" alt=""></a>
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
                                <a title="Printed Summer Dress" href="single-product.html">Dignissim furniture</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $140.00 </span>
                                <span class="old_price">  $150.50  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_featured">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product29.jpg')}}" alt=""></a>
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
                                <span class="new_price"> $130.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_featured">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product31.jpg')}}" alt=""></a>
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
                                <a title="Printed Summer Dress" href="single-product.html">hanbag lobortis</a>
                            </div>
                            <div class="small_product_price">
                                <span class="new_price"> $120.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_featured">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{ asset('frontend_assets/assets/img/product/product33.jpg')}}" alt=""></a>
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
            </div>
        </div>
    </div>
        <!--Trending products area end-->
    </div>
@endsection