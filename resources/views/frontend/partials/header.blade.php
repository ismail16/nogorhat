<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | Nagorhat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{('frontend_assets/assets/img/favicon.png')}}"">
    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/responsive.css') }}">
    <script src="{{ asset('frontend_assets/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>
<body>

<div class="header_area">
    <div class="header_middle middle_two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <h2>NOGORHAT</h2>
{{--                        <a href="{{route('index')}}"><img src="{{ asset('frontend_assets/assets/img/logo/logo2.png')}}" alt=""></a>--}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main_menu_inner menu_inner_two">
                        <div class="main_menu menu_two d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li class="_active"><a href="{{route('index')}}">Home</a></li>
                                    <li class="dropdown_item"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li class="mega_item"><a href="#">Features <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega_menu">
                                            <li><a href="#">Column1</a>
                                                <ul class="mega_dropdown">
                                                    <li><a href="shop.html">Shop </a></li>
                                                    <li><a href="single-product.html">Product Details</a></li>
                                                    <li><a href="cart.html">Cart </a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#">Column2</a>
                                                <ul class="mega_dropdown">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="blog-fullwidth.html">blog full width</a></li>
                                                    <li><a href="blog-sidebar.html">blog  Sidebar </a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header_widget about_widget widget_two text-right">
                        <ul>
                            <li class="shopping_cart">
                                <a href="{{ route('cart.index') }}" title="View my shopping cart"><i class="fa fa-shopping-bag"></i></a>
                                <span class="cart__quantity">{{ App\Models\Cart::totalItems() }}</span>
{{--                                <div class="mini_cart cart_left mini_c_two">--}}
{{--                                    <div class="cart_item">--}}
{{--                                        <div class="cart_img">--}}
{{--                                            <a href="#"><img src="{{ asset('frontend_assets/assets/img/cart/mini_cart1.jpg') }}" alt=""></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart_info">--}}
{{--                                            <a href="#">Handbag feugiat</a>--}}
{{--                                            <span class="cart_price">$115.00</span>--}}
{{--                                            <span class="quantity">Qty: 1</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart_remove">--}}
{{--                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart_item">--}}
{{--                                        <div class="cart_img">--}}
{{--                                            <a href="#"><img src="{{ asset('frontend_assets/assets/img/cart/mini_cart2.jpg')}}" alt=""></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart_info">--}}
{{--                                            <a href="#">Handbag fringilla</a>--}}
{{--                                            <span class="cart_price">$115.00</span>--}}
{{--                                            <span class="quantity">Qty: 1</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart_remove">--}}
{{--                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart_price_line">--}}
{{--                                        <span> Shipping </span>--}}
{{--                                        <span class="prices">  $7.00  </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart_total">--}}
{{--                                        <span> Shipping </span>--}}
{{--                                        <span class="prices">  $7.00  </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart_button pt-20">--}}
{{--                                        <a href="checkout.html"> Check out</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </li>
                            <li><a href="wishlist.html" title="My wishlist"><i class="fa fa-heart-o"></i></a></li>
                            <li class="account"><a><i class="fa fa-key"></i></a>
                                <div class="account_mini mini_c_two" style="position: absolute; width: 200px; background: #fff; -webkit-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2); box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2); z-index: 999; padding: 10px 20px 20px; right: 0; top: 100%; display: none;">
{{--                                    <div class="cart_total cart_button">--}}
{{--                                        <span class="pull-right">A</span>--}}
{{--                                    </div>--}}
                                    @if (Route::has('login'))
                                        @auth
                                            @if(Auth::user()->role->id == 1)
                                                <div class="text-center pt-20">
                                                    <a href="{{ route('admin.dashboard') }}" class="btn-primary btn-block">Dashboard</a>
                                                </div>
                                            @elseif(Auth::user()->role->id == 2)
                                                <div class="text-center pt-20">
                                                    <a href="{{ route('author.dashboard') }}" class="btn-primary btn-block">Dashboard</a>
                                                </div>
                                            @endif
                                            <div class="cart_button pt-20">
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                                    @csrf
                                                    <div class="cart_button">
                                                        <button class="btn-danger btn-block border-0" type="submit">Logout</button>
                                                    </div>
                                                </form>
                                            </div>
                                        @else
                                            @if (Route::has('register'))
                                                <div class="cart_button pt-20">
                                                    <a href="{{route('authorRegister')}}">Register</a>
                                                </div>
                                            @endif
                                            <div class="cart_button pt-20">
                                                <a href="{{route('authorLogin')}}">Login</a>
                                            </div>
                                        @endauth
                                    @endif

                                </div>
                            </li>
                        </ul>
                        <!--mini cart-->

                    </div>

                    <!--mobail menu start-->
                    <div class="mobile-menu mobile_menu_two d-lg-none">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">home shop 1</a></li>
                                        <li><a href="index-2.html">home shop 2</a></li>
                                        <li><a href="index-3.html">home shop 3</a></li>
                                        <li><a href="index-4.html">home shop 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="shop-list.html">shop list</a></li>
                                        <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                        <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                        <li><a href="shop-right-sidebar.html">shop Right Sidebar</a></li>
                                        <li><a href="shop-right-sidebar-list.html">shop list Right Sidebar</a></li>
                                        <li><a href="single-product.html">Product Details</a></li>
                                        <li><a href="single-product-video.html">Product Details Video</a></li>
                                        <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-details.html">single portfolio</a> </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                        <li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog  Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>

                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="#">Features</a>
                                    <ul>
                                        <li><a href="#">Column1</a>
                                            <ul>
                                                <li><a href="shop.html">Shop </a></li>
                                                <li><a href="single-product.html">Product Details</a></li>
                                                <li><a href="cart.html">Cart </a></li>
                                                <li><a href="checkout.html">Checkout </a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="my-account.html">My account</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column2</a>
                                            <ul>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-fullwidth.html">blog full width</a></li>
                                                <li><a href="blog-sidebar.html">blog  Sidebar </a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="services.html">Service</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column3</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="about-2.html">About Us 2</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="contact-2.html">Contact us 2</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom bottom_three">
        <div class="container">
            <div class="row" style="border: 3px solid #131313;">
                <div class="col-lg-3 col-md-5">
                    <div class="categories_menu categorie__three">
                        <div class="categories_title ca_title_two">
                            <h2 class="categori_toggle"><img src="{{ asset('frontend_assets/assets/img/logo/categorie.png')}}" alt=""> All categories</h2>
                        </div>
                        <div class="categories_menu_inner categorie_inner_three">
                            <ul>
                                @foreach( \App\Models\Category::all() as $category )
                                    <li>
                                        <a href="#"><i class="fa fa-caret-right"></i> {{ $category->name }} <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu categorie_mega_two" style="width: 100% !important;">
                                            <li style="width: 100%">
                                                <a href="#">Sub-Category</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        @foreach( \App\Models\Subcategory::where('category_id',$category->id)->get() as $subcategory )
                                                            <li><a href="#"></a>{{ $subcategory->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach

{{--                                <li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-caret-right"></i> Jewelry &amp; Watches</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-caret-right"></i> Health &amp; Beauty</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-caret-right"></i> Books &amp; Office</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-caret-right"></i> Sport &amp; Outdoor</a></li>--}}
                                <li id="cat_toggle" class="has-sub" style="border-top: 1px solid #c3bcbc;">
                                    <a href="#"><i class="fa fa-caret-right"></i> More Categories</a>
                                    <ul class="categorie_sub">
                                        <li><a href="#"><i class="fa fa-caret-right"></i> Computer - Laptop</a></li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="search_form form_three">
                        <form action="#">
                            <div class="select_categories select_three">
                                <select name="select" id="categorie" style="display: none;">
                                    <option selected="" value="1">All Categories</option>
                                    @foreach( \App\Models\Subcategory::all() as $subcategory )
                                        <option value="2">{{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">All Categories</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">All Categories</li>
                                        @foreach( \App\Models\Subcategory::all() as $subcategory )
                                            <li data-value="2" class="option">--{{ $subcategory->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <input placeholder="Enter your search..." type="text">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home_two_block_section">
{{--    <div class="container">--}}

