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
                            <li class="shopping_cart"><a href="#" title="View my shopping cart"><i class="fa fa-shopping-bag"></i></a>
                                <span class="cart__quantity">2</span>
                                <div class="mini_cart cart_left mini_c_two">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="{{ asset('frontend_assets/assets/img/cart/mini_cart1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Handbag feugiat</a>
                                            <span class="cart_price">$115.00</span>
                                            <span class="quantity">Qty: 1</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="{{ asset('frontend_assets/assets/img/cart/mini_cart2.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Handbag fringilla</a>
                                            <span class="cart_price">$115.00</span>
                                            <span class="quantity">Qty: 1</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_price_line">
                                        <span> Shipping </span>
                                        <span class="prices">  $7.00  </span>
                                    </div>
                                    <div class="cart_total">
                                        <span> Shipping </span>
                                        <span class="prices">  $7.00  </span>
                                    </div>
                                    <div class="cart_button pt-20">
                                        <a href="checkout.html"> Check out</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="wishlist.html" title="My wishlist"><i class="fa fa-heart-o"></i></a></li>
                            <li class="account"><a><i class="fa fa-key"></i></a>
                                <div class="account_mini mini_c_two" style="position: absolute; width: 300px; background: #fff; -webkit-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2); box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2); z-index: 999; padding: 10px 20px 20px; right: 0; top: 100%; display: none;">

                                    <div class="cart_total cart_button">
                                        <span class="pull-right">Register</span>
                                    </div>
                                    @if (Route::has('login'))
                                        @auth
                                            <div class="text-center pt-20">
                                                <a href="" class="btn-primary btn-block btn-lg">Dashboard</a>
                                            </div>
                                            <div class="cart_button pt-20">
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                                    @csrf
                                                    <div class="cart_button">
                                                        <button class="btn-danger btn-block btn-lg border-0" type="submit">Logout</button>
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
                                <li><a href="#"><i class="fa fa-caret-right"></i> Electronics <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu categorie_mega_two">
                                        <li><a href="#">Laptops</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dell Laptops</a></li>
                                                    <li><a href="#">HP Laptops</a></li>
                                                    <li><a href="#">Lenovo Laptops</a></li>
                                                    <li><a href="#">Apple Laptops</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Camera</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Camcorders</a></li>
                                                    <li><a href="#">Photo Accessories</a></li>
                                                    <li><a href="#">Memory Cards</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Smart Phone</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Apple Phones</a></li>
                                                    <li><a href="#">Samsung Phones</a></li>
                                                    <li><a href="#">Motorola Phones</a></li>
                                                    <li><a href="#">Lenovo Phones</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Television</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">All-in-One Computers</a></li>
                                                    <li><a href="#">Towers Only</a></li>
                                                    <li><a href="#">Refurbished Desktops</a></li>
                                                    <li><a href="#">Gaming Desktops</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Fashion  <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu categorie_mega_two">
                                        <li><a href="#">Dresses</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Sweater</a></li>
                                                    <li><a href="#">Evening</a></li>
                                                    <li><a href="#">Day</a></li>
                                                    <li><a href="#">Sports</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Handbags</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Shoulder</a></li>
                                                    <li><a href="#">Satchels</a></li>
                                                    <li><a href="#">kids</a></li>
                                                    <li><a href="#">coats</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">shoes</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Ankle Boots</a></li>
                                                    <li><a href="#">Clog sandals </a></li>
                                                    <li><a href="#">run</a></li>
                                                    <li><a href="#">Books</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Clothing</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Coats  Jackets </a></li>
                                                    <li><a href="#">Raincoats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Furnitured &amp; Decor <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu categorie_mega_two decor">
                                        <li><a href="#">Chair</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dining room</a></li>
                                                    <li><a href="#">bedroom</a></li>
                                                    <li><a href="#"> Home &amp; Office</a></li>
                                                    <li><a href="#">living room</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Lighting</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Ceiling Lighting</a></li>
                                                    <li><a href="#">Wall Lighting</a></li>
                                                    <li><a href="#">Outdoor Lighting</a></li>
                                                    <li><a href="#">Smart Lighting</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Sofa</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Fabric Sofas</a></li>
                                                    <li><a href="#">Leather Sofas</a></li>
                                                    <li><a href="#">Corner Sofas</a></li>
                                                    <li><a href="#">Sofa Beds</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Toys &amp; Hobbies <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu categorie_mega_two hobbies">
                                        <li><a href="#">Boys' Toys</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Building Toys</a></li>
                                                    <li><a href="#">Electronics Toys</a></li>
                                                    <li><a href="#">action figures </a></li>
                                                    <li><a href="#">specialty &amp; boutique toy</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Girls' Toys</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dolls for Girls</a></li>
                                                    <li><a href="#">Girls' Learning Toys</a></li>
                                                    <li><a href="#">Arts and Crafts for Girls</a></li>
                                                    <li><a href="#">Video Games for Girls</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Jewelry &amp; Watches</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Health &amp; Beauty</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Books &amp; Office</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Sport &amp; Outdoor</a></li>
                                <li id="cat_toggle" class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> More Categories</a>
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
                                    <option value="2">Electronics</option>
                                    <option value="3">--Laptops</option>
                                    <option value="4">---Dell Laptops</option>
                                    <option value="5">---HP Laptops</option>
                                    <option value="5">---Lenovo Laptops</option>
                                    <option value="5">--Camera</option>
                                    <option value="5">---Digital Cameras</option>
                                    <option value="5">---Apple Laptops</option>
                                    <option value="5">---Camcorders</option>
                                    <option value="5">---Photo Accessories</option>
                                    <option value="5">---Memory Cards</option>
                                    <option value="5">--Smart Phone</option>
                                    <option value="5">---Samsung Phones</option>
                                    <option value="5">---Motorola Phones</option>
                                    <option value="5">--Television</option>
                                    <option value="5">----Dresses</option>
                                    <option value="5">---Sweater</option>
                                    <option value="5">----Evening</option>
                                    <option value="5">---Day</option>
                                    <option value="5">---Sports</option>
                                    <option value="5">---Shoulder</option>
                                    <option value="5">---Satchels</option>
                                    <option value="5">---kids</option>
                                    <option value="5">---coats</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">All Categories</span><ul class="list"><li data-value="1" class="option selected">All Categories</li><li data-value="2" class="option">Electronics</li><li data-value="3" class="option">--Laptops</li><li data-value="4" class="option">---Dell Laptops</li><li data-value="5" class="option">---HP Laptops</li><li data-value="5" class="option">---Lenovo Laptops</li><li data-value="5" class="option">--Camera</li><li data-value="5" class="option">---Digital Cameras</li><li data-value="5" class="option">---Apple Laptops</li><li data-value="5" class="option">---Camcorders</li><li data-value="5" class="option">---Photo Accessories</li><li data-value="5" class="option">---Memory Cards</li><li data-value="5" class="option">--Smart Phone</li><li data-value="5" class="option">---Samsung Phones</li><li data-value="5" class="option">---Motorola Phones</li><li data-value="5" class="option">--Television</li><li data-value="5" class="option">----Dresses</li><li data-value="5" class="option">---Sweater</li><li data-value="5" class="option">----Evening</li><li data-value="5" class="option">---Day</li><li data-value="5" class="option">---Sports</li><li data-value="5" class="option">---Shoulder</li><li data-value="5" class="option">---Satchels</li><li data-value="5" class="option">---kids</li><li data-value="5" class="option">---coats</li></ul></div>
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

