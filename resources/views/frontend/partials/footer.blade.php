{{--</div>--}}
    </div>
    @php
        $setting = \App\Models\Setting::orderBy('id', 'desc')->first();
    @endphp
        <div class="">
            <div class="newsletter_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="footer_logo">
                                <a href="{{route('index')}}">
                                    <img src="{{ asset('images/store_logo/'.$setting->store_logo)}}" class="footer_logo_img" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social_icone">
                                <ul>
                                    @isset ($setting->facebook)
                                        <li><a target="_blank" href="{{ $setting->facebook }}" title="facebook"><i class="fa fa-facebook p-1"></i></a></li>
                                    @endisset
                                    @isset ($setting->instagram)
                                        <li><a target="_blank" href="{{ $setting->instagram }}" title="instagram"><i class="fa fa-instagram p-1"></i></a></li>
                                    @endisset
                                    @isset ($setting->youtube)
                                         <li><a target="_blank" href="{{ $setting->youtube }}" title="Youtube"><i class="fa fa-youtube p-1"></i></a></li>
                                    @endisset
                                    @isset ($setting->twitter)
                                        <li><a target="_blank" href="{{ $setting->twitter }}" title="twitter"><i class="fa fa-twitter p-1"></i></a></li>
                                    @endisset
                                    @isset ($setting->linkedIn)
                                        <li><a target="_blank" href="{{ $setting->linkedIn }}" title="linkedIn"><i class="fa fa-linkedin p-1"></i></a></li>
                                    @endisset
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div class="newslatter_inner fix">
                                <form  id="subscribe_form">
                                    <input id="subscribe_email" class="large_input" name="email" placeholder="enter your email" type="email">
                                    <button onclick="subscribe_post()" type="submit">Subscribe</button>
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
                           
                            <div class="col-md-4">
                                <div class="single_footer">
                                    <h4>GET IN TOUCH WITH US</h4>
                                    <ul>
                                        <li><a href="{{ route('about') }}"><i class="fa fa-circle"></i>About Us</a></li>
                                        <li><a href="{{ route('contact') }}"><i class="fa fa-circle"></i> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single_footer">
                                    <h4>GET TO KNOW</h4>
                                    <ul>
                                        <li><a href="{{ route('terms.conditions') }}"><i class="fa fa-circle"></i> Terms & Conditions</a></li>
                                        <li><a href="{{ route('privacy_policy') }}"><i class="fa fa-circle"></i> Privacy Policy</a></li>
                                        <li><a href="{{ route('returns.replacement') }}"><i class="fa fa-circle"></i> Returns and Replacement</a></li>
                                    </ul>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="single_footer">
                                    <h4>store information</h4>

                                    <ul>
                                        <li><i class="fa fa-phone"></i> {{ $setting->store_phone }}</li>
                                        <li><a href="#"><i class="fa fa-envelope-square"></i> {{ $setting->store_email }}</a></li>
                                        <li><i class="fa fa-home"></i> {{ $setting->store_address }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_area_copy_right">
                <div class="container">
                    <div class="copyright_area">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="widget_copyright">
                                    <p class="text-white">copyright &copy; 2019 <a href="{{ route('index') }}">{{ $setting->store_name }}</a>. all right reserved</p>
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
        <script src="{{asset('js/bootbox.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.js"></script>
        <script>

            $(document).on("click", ".on_delete", function (e) {
                var index = $(this).data('content');
                bootbox.confirm({
                    message: "Do you want to remove this?",
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-sm btn-danger'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-sm btn-default'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            $("#on_delete" + index).submit();
                        }
                    }
                });
            });

            function product_review_post(){
                var token = $('meta[name="csrf-token"]').attr('content');
                var product_id = $('#product_id').val()
                var rating = $('#rating').val()
                var name = $('#name').val()
                var email = $('#email').val()
                var review = $('#review').val()
                $.ajax({
                    url: "{{route('product_review_post')}}",
                    method: "POST",
                    data: { _token : token, product_id:product_id, rating:rating, name: name, email:email, review:review },
                    success: function (data) {
                        if (data.success) {
                            Swal.fire({
                              icon: 'success',
                              title: data.success
                            })
                            $('#rating').val('') 
                            $('#name').val('')
                            $('#email').val('')
                            $('#review').val('')
                            console.log(data)
                        }else {
                            Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: 'Something went wrong!'
                            })
                            $('#rating').val('') 
                            $('#name').val('')
                            $('#email').val('')
                            $('#review').val('')
                        }
                    }
                });
            }

            function subscribe_post(){
                $("#subscribe_form").submit(function(e){
                    return false;
                });
                var token = $('meta[name="csrf-token"]').attr('content');
                var subscribe_email = $('#subscribe_email').val()
                var ip_address = '{{ \Request::ip() }}'

                $.ajax({
                    url: "{{route('subscribtion')}}",
                    method: "POST",
                    data: { _token : token, email:subscribe_email, ip_address:ip_address},
                    success: function (data) {
                        if (data.success) {
                            Swal.fire({
                              icon: 'success',
                              title: 'Thank You !',
                              text: data.success
                            })
                            $('#subscribe_email').val('')
                            console.log(data)
                        }else {
                            Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: 'Something went wrong!'
                            })
                            $('#subscribe_email').val('')
                        }
                    }
                });
            }

            $(document).ready(function(){
  
              /* 1. Visualizing things on Hover - See next part for action on click */
              $('#stars li').on('mouseover', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
               
                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e){
                  if (e < onStar) {
                    $(this).addClass('hover');
                  }
                  else {
                    $(this).removeClass('hover');
                  }
                });
                
              }).on('mouseout', function(){
                $(this).parent().children('li.star').each(function(e){
                  $(this).removeClass('hover');
                });
              });
              
              
              /* 2. Action to perform on click */
              $('#stars li').on('click', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');
                
                for (i = 0; i < stars.length; i++) {
                  $(stars[i]).removeClass('selected');
                }
                
                for (i = 0; i < onStar; i++) {
                  $(stars[i]).addClass('selected');
                }
                
                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                var msg = "";
                if (ratingValue > 1) {
                    msg = "Thanks! You rated this " + ratingValue + " stars.";
                }
                else {
                    msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                }
                responseMessage(msg,ratingValue);
                
              });
              
              
            });


            function responseMessage(msg,ratingValue) {
              $('.success-box').fadeIn(200);  
              $('.success-box div.text-message').html("<span>" + msg + "</span>");
              $('#rating').val(ratingValue)
            }

        </script>
        @stack('scripts')
    </body>
</html>
