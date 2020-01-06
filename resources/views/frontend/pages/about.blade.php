@extends('frontend/layouts/master')
@section('title','About us')

@section('content')
    @include('frontend/partials/content_top')

    <div class="about_section_aera">
        <div class="container about_container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-12 col-md-18 col-sm-22">
                    <h1>ABOUT US</h1>
                    <p style="text-align: justify;">NogorHat is the largest one-stop shopping destination in Bangladesh. Launched in 2016, the online store offers the widest range of products in categories ranging from electronics to household appliances, latest smart phones, Camera, Computing &amp; accessories fashion, health equipment and makeup.</p>
                    <p style="text-align: justify;">NogorHat believes in “Delivering Happiness” with an excellent customer experience thus provides the most efficient delivery service through own logistics so that customers get a hassle-free product delivery at their doorstep. We help our local and international vendors as well as 200 brands serving thousands of consumers from all over Bangladesh. We also offer free returns and various payment methods including Cash on delivery, Online Payments, Card on delivery and bKash with all of our products.</p>
                    <p style="text-align: justify;">Follow us on Facebook and Twitter to stay updated about our latest offers and promotions. Happy <span style="color: #0000ff;"><a title="NogorHat.com" href="https://www.NogorHat.com"><span style="color: #0000ff;"><strong>Online Shopping</strong></span></a>
        </span>!</p>
                    <p style="text-align: center;"><img alt="about" src="https://d1lwfjp709sq0o.cloudfront.net/media/wysiwyg/mmm/right_choice.png" height="106" width="130"></p>
                    <h2 style="text-align: center;">Make the right choice</h2>
                    <p><strong>Indulge in Genuine and quality products</strong></p>
                    <p>NogorHat lets you discover and experience the best of every product. Our team works with a variety of brands and vendors from all over the world to bring in new products everyday.</p>
                    <ul>
                        <li>Ultimate one-stop shopping experience in Bangladesh</li>
                        <li>Most trusted online shopping platform</li>
                        <li>Wide selection of the best local and foreign brands</li>
                        <li>Fastest Delivery service</li>
                        <li>3 Days Easy Return</li>
                        <li>Genuine and authentic products</li>
                        <li>Warranty Facility</li>
                        <li>0% interest EMI schemes</li>
                    </ul>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" alt="info " src="https://d1lwfjp709sq0o.cloudfront.net/media/wysiwyg/mmm/info_order.png" height="106" width="105"></p>
                    <h2 style="text-align: center;">Contact Us</h2>
                    <p><strong>Experience the best Customer Care</strong></p>
                    <p>Customer’s happiness is our highest priority. We have round-the-clock Customer Care service.</p>
                    <ul>
                        <li>Customer Service hotline +8801919160373, available from 9:00 am to 9:00 pm</li>
                        <li>Mail us at nogorhatbd@gmail.com</li>
                        <li>Facebook chat or through Live Chat on NogorHat website.</li>
                        <li>Feedback call</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" alt="service " src="https://d1lwfjp709sq0o.cloudfront.net/media/wysiwyg/mmm/best_service.png" height="106" width="105"></p>
                    <h2 style="text-align: center;">FAST DELIVERY</h2>
                    <p><strong>Say NO to waiting</strong></p>
                    <p>Why should you have to wait for days to receive your product? We offer various
                        delivery methods for all products for the most convenient and safe product delivery.</p>
                    <ul>
                        <li>Click &amp; Collect Services</li>
                        <li>Office Pickup/Collection</li>
                        <li>Fast Pick &amp; Same day delivery</li>
                        <li>Sundarban Courier Service</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>&nbsp;<img style="display: block; margin-left: auto; margin-right: auto;" alt="sjdnw" src="https://d1lwfjp709sq0o.cloudfront.net/media/wysiwyg/mmm/convenience.png" height="106" width="130"></p>
                    <h2 style="text-align: center;">SECURE CHECKOUT</h2>
                    <p><strong>We take no chance with your security</strong></p>
                    <p style="text-align: justify;">NogorHat is a licensed, authorized, and fully protected website
                        which offers safe and secure checkout for all our customers. We take special care in securing
                        all your personal information through various security checks. Our business is licensed and
                        regulated with the sole purpose of our customer’s security and convenience.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="counter_up_area mb-10">
        <div class="container-fluid counter">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup">
                        <div class="counter_img">
                            <img src="{{ asset('frontend_assets/assets/img/cart/count.png')}}" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">2170</h2>
                            <p>happy customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup count-two">
                        <div class="counter_img">
                            <img src="{{ asset('frontend_assets/assets/img/cart/count2.png')}}" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">8080</h2>
                            <p>AWARDS won</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup">
                        <div class="counter_img">
                            <img src="{{ asset('frontend_assets/assets/img/cart/count3.png')}}" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">2150</h2>
                            <p>HOURS WORKED</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup count-two">
                        <div class="counter_img">
                            <img src="{{ asset('frontend_assets/assets/img/cart/cart5.png')}}" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">2170</h2>
                            <p>COMPLETE PROJECTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
