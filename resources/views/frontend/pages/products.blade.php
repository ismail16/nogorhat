@extends('frontend/layouts/master')
@section('title','All products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="sidebar_categorie_area">
                    <div class="sidebar_categorie_item mt-1">
                        <div class="categorie__titile">
                            <h2>Availability</h2>
                        </div>
                        <div class="categorie_filter">
                            <ul>
                                <li>
                                    <input id="stock" type="checkbox">
                                    <label for="stock"> In stock <span>(12)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_categorie_item">
                        <div class="categorie__titile">
                            <h2>Condition</h2>
                        </div>
                        <div class="categorie_filter">
                            <ul>
                                <li>
                                    <input id="new" type="checkbox">
                                    <label for="new">New <span>(14)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_categorie_item">
                        <div class="categorie__titile">
                            <h2>Manufacturer</h2>
                        </div>
                        <div class="categorie_filter">
                            <ul>
                                <li>
                                    <input id="fashion" type="checkbox">
                                    <label for="fashion">Fashion Manufacturer <span>(11)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_categorie_item">
                        <div class="categorie__titile">
                            <h2>Price</h2>
                        </div>
                        <div class="categorie_filter">
                            <div class="ca_search_filters">
                                <label for="amount"> Range:</label>
                                <input type="text" name="text" id="amount">
                                <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_categorie_item">
                        <div class="categorie__titile">
                            <h2>Size</h2>
                        </div>
                        <div class="categorie_filter">
                            <ul>
                                <li>
                                    <input id="size1" type="checkbox">
                                    <label for="size1">S <span>(11)</span></label>
                                </li>
                                <li>
                                    <input id="size2" type="checkbox">
                                    <label for="size2">M <span>(13)</span></label>
                                </li>
                                <li>
                                    <input id="size3" type="checkbox">
                                    <label for="size3">L<span>(14)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_categorie_item">
                        <div class="categorie__titile">
                            <h2>Color</h2>
                        </div>
                        <div class="categorie_filter color">
                            <ul>

                                <li>
                                    <input class="input_color" id="blick" type="radio">
                                    <label class="input_color" for="blick"></label>
                                    <a href="#">Black <span>(10)</span></a>

                                </li>
                                <li>
                                    <input class="input_color1" id="orange" type="radio">
                                    <label class="input_color1" for="orange"></label>
                                    <a href="#">Orange <span>(12)</span></a>
                                </li>
                                <li>
                                    <input class="input_color2" id="blue" type="radio">
                                    <label class="input_color2" for="blue"></label>
                                    <a href="#">Blue <span>(14)</span></a>
                                </li>
                                <li>
                                    <input class="input_color3" id="yellow" type="radio">
                                    <label class="input_color3" for="yellow"></label>
                                    <a href="#">Yellow <span>(12)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_banner product_banner_shop fix mb-30">
                        <a href="#"><img src="assets/img/banner/banner1.jpg" alt=""></a>
                    </div>
                    <div class="top_sellers top_seller_two featured mb-40">
                        <div class="top_title">
                            <h2> Bestseller</h2>
                        </div>
                        <div class="small_product_active owl-carousel owl-loaded owl-drag">


                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-422px, 0px, 0px); transition: all 0s ease 0s; width: 1266px;"><div class="owl-item cloned" style="width: 211px;"><div class="small_product_item">
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart13.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart1.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart2.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart3.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart5.jpg" alt=""></a>
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
                                        </div></div><div class="owl-item cloned" style="width: 211px;"><div class="small_product_item">
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart4.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart10.jpg" alt=""></a>
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
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
                                                        <span class="old_price">  $30.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart7.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
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
                                        </div></div><div class="owl-item active" style="width: 211px;"><div class="small_product_item">
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart13.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart1.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart2.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart3.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart5.jpg" alt=""></a>
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
                                        </div></div><div class="owl-item" style="width: 211px;"><div class="small_product_item">
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart4.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart10.jpg" alt=""></a>
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
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
                                                        <span class="old_price">  $30.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart7.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
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
                                        </div></div><div class="owl-item cloned" style="width: 211px;"><div class="small_product_item">
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart13.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart1.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart2.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart3.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart5.jpg" alt=""></a>
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
                                        </div></div><div class="owl-item cloned" style="width: 211px;"><div class="small_product_item">
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart4.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart10.jpg" alt=""></a>
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
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
                                                        <span class="old_price">  $30.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="small_product">
                                                <div class="small_product_thumb">
                                                    <a href="single-product.html"><img src="assets/img/cart/cart7.jpg" alt=""></a>
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
                                                    <a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
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
                                        </div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="categorie_d_right mt-1">
                    <div class="single_slider single_sl_categorie" style="background-image: url({{ asset('frontend_assets/assets/img/slider/slider9.jpg')}}">

                    </div>
                    <div class="categorie_product_toolbar mb-30">
                        <div class="categorie_product_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                </li>
                            </ul>
                        </div>
                        <form action="#">
                            <label>Sort By</label>
                            <select name="orderby" id="short" style="display: none;">
                                <option selected="" value="1">Default sorting</option>
                                <option value="1">Sort by popularity</option>
                                <option value="1">Sort by average rating</option>
                                <option value="1">Sort by rating</option>
                                <option value="1">Sort by price: low to high</option>
                                <option value="1">Sort by price: high to low</option>
                                <option value="1">Price: Lowest first</option>
                                <option value="1">Product Name: A to Z</option>
                                <option value="1">In stock</option>
                                <option value="1">Reference: Lowest first</option>
                                <option value="1">Reference: Highest first</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">Default sorting</span><ul class="list"><li data-value="1" class="option selected">Default sorting</li><li data-value="1" class="option">Sort by popularity</li><li data-value="1" class="option">Sort by average rating</li><li data-value="1" class="option">Sort by rating</li><li data-value="1" class="option">Sort by price: low to high</li><li data-value="1" class="option">Sort by price: high to low</li><li data-value="1" class="option">Price: Lowest first</li><li data-value="1" class="option">Product Name: A to Z</li><li data-value="1" class="option">In stock</li><li data-value="1" class="option">Reference: Lowest first</li><li data-value="1" class="option">Reference: Highest first</li></ul></div>
                        </form>
                        <p>Showing 1–12 of 46 results</p>
                    </div>


                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="large" role="tabpanel">
                            <div class="row cate_tab_product">
                                @foreach(\App\Models\Product::all() as $product)
                                    @php
                                        $product_image = \App\Models\ProductImage::Where('product_id',$product->id)->first()->image
                                    @endphp
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="single_product categorie card">
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="{{ asset('images/product_image/'.$product_image) }}" alt=""></a>
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
                                            <div class="product_content p-3">
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                                                    <a title="Printed Summer Dress" href="single-product.html">{{ $product->title }}</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> {{ $product->price }} Tk</span>
                                                    <span class="old_price">  {{ $product->old_price }}  Tk</span>
                                                </div>
                                                <div class="_card-footer">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="{{ route('single.producs',$product->id) }}" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <form class="" action="{{ route('card.store') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                                                <button class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> ADD</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            @foreach(\App\Models\Product::all() as $product)
                                @php
                                    $product_image = \App\Models\ProductImage::Where('product_id',$product->id)->first()->image
                                @endphp
                                <div class="single_product categorie">
                                <div class="row cate_tab_product">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('images/product_image/'.$product_image) }}" alt=""></a>
                                            <div class="product_discount">
                                                <span>-10%</span>
                                            </div>

                                            <div class="quick_view categorie_view">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-6">
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
                                            <div class="small_product_name categorie_name">
                                                <a title="Printed Summer Dress" href="single-product.html"> {{ $product->title }} </a>
                                            </div>
                                            <div class="small_product_price categorie_prie mb-10">
                                                <span class="new_price"> {{ $product->price }} Tk</span>
                                                <span class="old_price"> {{ $product->old_price }} Tk </span>
                                            </div>
                                            <div class="single__product_drsc" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                                                {!! $product->description !!}
                                            </div>

                                            <div class="product_in_stock mt-2">
                                                <span> In stock </span>
                                            </div>
                                            <div class="_card-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('single.producs',$product->id) }}" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form class="" action="{{ route('card.store') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                                            <button class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> ADD</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="page_numbers_toolbar">
                        <ul>
                            <li><a class="current_page" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a class="next_page" href="#">next</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
