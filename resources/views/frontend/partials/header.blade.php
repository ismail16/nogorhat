<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{('frontend_assets/assets/img/favicon.png')}}">
    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/responsive.css') }}">
    <script src="{{ asset('frontend_assets/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
    	.account_dropdown{
		    position: absolute;
		    width: 200px;
		    background: #fff;
		    -webkit-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2);
		    box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2);
		    z-index: 999;
		    padding: 10px 20px 20px;
		    right: 0; top: 100%;
		    display: none;
		}
		@media(max-width: 767px) {
		    .account_dropdown{
		        left: 0;
		    }
		}
		@media(max-width: 479px) {
		    .account_dropdown{
		        width: 200px;
		        z-index: 9999;
		        left: -50px;
		    }
		}

        .btn-xs{
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" id="theme-styles">
    @stack('css')

</head>
<body>

<div class="header_area">
    @php
        $setting = \App\Models\Setting::orderBy('id', 'desc')->first();
    @endphp
    <div class="header_middle middle_two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        {{-- <h2 class="m-0">shop</h2> --}}
                        <a href="{{route('index')}}">
                            <img src="{{ asset('images/store_logo/'.$setting->store_logo)}}" style="height: 40px;" alt="">
                        </a><br>
                        <span style="font-style: italic;color: #ab0400;font-weight: bold;">
                           {{ $setting->store_title }}
                        </span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main_menu_inner menu_inner_two">
                        <div class="main_menu menu_two d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li class="_active"><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{ route('products') }}">Products</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li class="dropdown_item"><a href="shop.html">Information <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu">
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

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header_widget about_widget widget_two text-right">
                        <ul>
                            <li class="shopping_cart">
                                <a href="{{ route('cart.index') }}" title="View my shopping cart"><i class="fa fa-shopping-bag"></i></a>
                                <span class="cart__quantity">{{ App\Models\Cart::totalItems() }}</span>
                            </li>
                            <li class="account"><a><i class="fa fa-key"></i></a>
                                <div class="account_mini mini_c_two  account_dropdown" style="">
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
                    </div>

                    <!--mobile menu start-->
                    <div class="mobile-menu mobile_menu_two d-lg-none">
                        <nav>
                            <ul>
                                <li class="_active"><a href="{{route('index')}}">Home</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="{{ route('products') }}">Products</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
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
                            <h2 class="categori_toggle">
                                <img src="{{ asset('frontend_assets/assets/img/logo/categorie.png')}}" alt=""> All categories
                            </h2>
                        </div>
                        <div class="categories_menu_inner categorie_inner_three">
                            <ul>
                                @foreach( \App\Models\Category::all() as $category )
                                    <li>
                                        <a href="{{ route('category',$category->id) }}"><i class="fa fa-caret-right"></i> {{ $category->name }} <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu categorie_mega_two" style="width: 100% !important;">
                                            <li style="width: 100%">
                                                <a href="#">Sub-Category</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        @foreach( \App\Models\Subcategory::where('category_id',$category->id)->get() as $subcategory )
                                                            <li><a href="{{ route('sub_category', [$category->slug, $subcategory->slug] ) }}">{{ $subcategory->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach

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
                    <div class="_search_form form_three">
                        <form action="{{ route('search') }}">
                            <div class="row pr-3 pl-3">
                                <div class="col-md-3 col-sm-12 p-0 mb-1">
                                    <select  style="height: 45px;" name="category" id="categorie" class="form-control rounded-0">
                                        <option value="">All Categories</option>
                                        @foreach( \App\Models\Subcategory::all() as $subcategory )
                                            <option value="{{ $subcategory->slug }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-8 col-sm-10 p-0  mb-1">
                                    <input class="form-control rounded-0" name="query" placeholder="Enter your search..." type="text">
                                </div>
                                <div class="col-md-1 col-sm-2 p-0">
                                    <button style="height: 45px;" class="form-control rounded-0 btn btn-outline-warning" type="submit">
                                        <i class="fa fa-search font-weight-bold" style="font-size: 18px;" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home_two_block_section mt-1">
{{--    <div class="container">--}}

