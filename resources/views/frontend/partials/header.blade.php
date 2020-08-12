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
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/customs.css') }}">

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
                        <a href="{{route('index')}}">
                            <img src="{{ asset('images/store_logo/'.$setting->store_logo)}}" class="store_logo" alt="">
                        </a><br>
                        <span class="store_title">
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
                                    <li class="dropdown_item">
                                        <a href="/">Information <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="{{ route('terms.conditions') }}"> Terms & Conditions </a></li>
                                            <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                                            <li><a href="{{ route('returns.replacement') }}">Returns and Replacement</a></li>
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
                                <div class="account_mini mini_c_two  account_dropdown">
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
                                <li><a href="{{ route('products') }}">Products</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li class="dropdown_item">
                                    <a href="/">Information <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="{{ route('terms.conditions') }}"> Terms & Conditions </a></li>
                                        <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                                        <li><a href="{{ route('returns.replacement') }}">Returns and Replacement</a></li>
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
            <div class="row header_bottom_row">
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
                                        <ul class="categories_mega_menu categorie_mega_two w-100">
                                            <li class="w-100">
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
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="_search_form form_three">
                        <form action="{{ route('search') }}">
                            <div class="row pr-3 pl-3">
                                <div class="col-md-3 col-sm-12 p-0 mb-1">
                                    <select name="category" id="categorie" class="form-control rounded-0">
                                        <option value="">All Categories</option>
                                        @foreach( \App\Models\Subcategory::all() as $subcategory )
                                            <option value="{{ $subcategory->slug }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-8 col-sm-10 p-0  mb-1">
                                    <input class="form-control rounded-0 large_input" name="query" placeholder="Enter your search..." type="text">
                                </div>
                                <div class="col-md-1 col-sm-2 p-0">
                                    <button class="form-control search_btn rounded-0 btn btn-outline-warning" type="submit">
                                        <i class="fa fa-search search_btn_icon font-weight-bold" aria-hidden="true"></i>
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

