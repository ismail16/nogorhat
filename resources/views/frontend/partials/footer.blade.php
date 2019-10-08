{{--        </div>--}}

        </div>
        <div class="">
            <div class="newsletter_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-6">
                            <div class="footer_logo">
                                <h3 class="text-red">NOGORHAT</h3>
                                {{--                            <a href="#"><img src="{{ asset('frontend_assets/assets/img/logo/logo.png')}}"" alt=""></a>--}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="social_icone">
                                <ul>
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="newslatter_inner fix">
                                <h4>send Newsletters</h4>
                                <form action="#">
                                    <input placeholder="enter your email" type="text">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_area">
                <div class="container">
                    <div class="footer_top">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_footer">
                                    <h4>store information</h4>

                                    <ul>
                                        <li><i class="fa fa-home"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                                        <li><i class="fa fa-phone"></i> (+1)866-550-3669</li>
                                        <li><a href="#"><i class="fa fa-envelope-square"></i> demo@posthemes.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_footer">
                                    <h4>GET IN TOUCH WITH US</h4>
                                    <ul>
                                        <li><a href="{{ route('contact') }}"><i class="fa fa-circle"></i> Contact Us</a></li>
                                        <li><a href="{{ route('author.dashboard') }}"><i class="fa fa-circle"></i> Your Account</a></li>
                                        <li><a href="{{ route('faq') }}"><i class="fa fa-circle"></i> FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_footer">
                                    <h4>GET TO KNOW US</h4>
                                    <ul>
                                        <li><a href="{{ route('about') }}"><i class="fa fa-circle"></i>About Us</a></li>
                                        <li><a href="{{ route('terms.conditions') }}"><i class="fa fa-circle"></i> Terms & Conditions</a></li>
                                        <li><a href="{{ route('returns.replacement') }}"><i class="fa fa-circle"></i> Returns and Replacement</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_footer">
                                    <h4>instagram</h4>
                                    <div class="instagram_img">
                                        <div class="single_instagram_img">
                                            <a href="#"><img src="{{ asset('frontend_assets/assets/img/instagram/instagram1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="single_instagram_img">
                                            <a href="#"><img src="{{ asset('frontend_assets/assets/img/instagram/instagram2.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright_area">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="widget_copyright">
                                    <p>copyright &copy; 2018 <a href="#">Lionshop</a>. all right reserved</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="modal_tab">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/product/product18.jpg')}}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/product/product23.jpg')}}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/product/product18.jpg')}}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="{{ asset('frontend_assets/assets/img/product/product7.jpg')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal_tab_button">
                                                <ul class="nav product_navactive" role="tablist">
                                                    <li >
                                                        <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('frontend_assets/assets/img/cart/cart11.jpg')}}" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ asset('frontend_assets/assets/img/cart/cart8.jpg')}}" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('frontend_assets/assets/img/cart/cart2.jpg')}}" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link button_three" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('frontend_assets/assets/img/cart/cart4.jpg')}}" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="modal_title mb-15">
                                                <h2>Handbag feugiat</h2>
                                            </div>
                                            <div class="modal_price mb-10">
                                                <span class="new_price">$64.99</span>
                                                <span class="old_price" >$78.99</span>
                                            </div>
                                            <div class="modal_content mb-10">
                                                <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                                            </div>
                                            <div class="modal_size mb-15">
                                                <h2>size</h2>
                                                <ul>
                                                    <li><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                    <li><a href="#">xxl</a></li>
                                                </ul>
                                            </div>
                                            <div class="modal_add_to_cart mb-15">
                                                <form action="#">
                                                    <input min="0" max="100" step="2" value="1" type="number">
                                                    <button type="submit">add to cart</button>
                                                </form>
                                            </div>
                                            <div class="modal_description mb-15">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                            </div>
                                            <div class="modal_social">
                                                <h2>Share this product</h2>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
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

        <script src="{{ asset('frontend_assets/assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{ asset('frontend_assets/assets/js/popper.js')}}"></script>
        <script src="{{ asset('frontend_assets/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('frontend_assets/assets/js/plugins.js')}}"></script>
        <script src="{{ asset('frontend_assets/assets/js/main.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
        @stack('scripts')
    </body>
</html>
