@extends('frontend/layouts/master')
@section('title','Returns and Replacement')

@section('content')
    @include('frontend/partials/content_top')

    <div class="about_section_aera">
        <div class="container about_container">
<<<<<<< HEAD
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about_thumb">
                        <img src="{{ asset('frontend_assets/assets/img/ship/about1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about_content">
                        <h1>WE CREATE <br>WORDPRESS THEMES</h1>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. </p>
                        <div class="view__work">
                            <a href="#">view work </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counter_up_area mb-40">
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

    <div class="about_progressbar mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="progressbar_inner">
                        <h2>We have Skills to show</h2>
                        <div class="progress_skill">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 60%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <span class="progress_persent">HTML/CSS</span>
                                </div>
                            </div>
                            <span class="progress_discount">60%</span>
                        </div>
                        <div class="progress_skill">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">WORDPRESS THEME </span>
                                </div>

                            </div>
                            <span class="progress_discount">90%</span>
                        </div>
                        <div class="progress_skill">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" style="width: 70%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.7s; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">Typhography </span>
                                </div>

                            </div>
                            <span class="progress_discount">70%</span>
                        </div>
                        <div class="progress_skill">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.7s; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">Branding  </span>
                                </div>

                            </div>
                            <span class="progress_discount">80%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__img">
                        <img src="{{ asset('frontend_assets/assets/img/ship/about3.jpg')}}" alt="">
                    </div>
=======
            <div class="row">
                <div class="col-lg-6 col-md-3 col-sm-1" style="text-align: center;">&nbsp;</div>
                <div class="col-lg-12 col-md-18 col-sm-22" style="text-align: left;">
                    <h2><strong>OVERVIEW</strong></h2>
                    <p style="text-align: justify;">
                        Before returning or replacing an item, please read through our return and replacement related Frequently Asked Questions (FAQs) on this page, to make sure your purchased item is eligible for return.

                        <br><br>What is the procedure to return a product?
                        You have 3 calendar days after item delivery, to notify us that you want to return your product. If your item meets all the requirements, your return can be initiated by calling our Customer Service at
                        +88 01919160373.

                    </p>

                    <h3><strong>Steps :</strong></h3>
                    <p style="text-align: justify;">
                        <br>Step 1: Check if your product meets all the conditions for returning a product.
                        <br>Step 2: Contact NogorHat’s Customer Service to submit a complaint / request for return.
                        <br>Step 3: Fill in the return form given with the invoice.
                        <br>Step 4: Choose your preferred method of product return when you call Customer Service.
                        <br>Step 5: Your returned product will go through a Quality Check.
                        Step 6: If validated, you will get product Return / Replacement.
                    </p>

                    <h3><strong>NOTE:</strong></h3>
                    <p style="text-align: justify;">
                        ★ You must show the original Customer Copy of the Invoice to authenticate your purchase, at the time of handing over the product.

                        <br><br><br>How much time do you have to return a product?
                        <br>Items sold on NogorHat can be returned within a period of 3 calendar days from the delivery date, provided they are eligible for return. For example: If you receive your product on the 5th of any month, you have time until the 8th of that month to contact NogorHat’s Customer Service center. Customer Service agents are available from 9:00 am – 10:00 pm, 7 days a week (except on national holidays e.gEid).
                    </p>

                    <h3><strong>NOTE:</strong></h3>
                    <p style="text-align: justify;">
                        ★ You have 3 calendar days from the day you receive you’re purchased product, to call NogorHat to initiate your return. Unfortunately, we will not accept returns past 3 days of your product delivery, or if you do not have the original copy of the Customer Copy Invoice. If the nature of your complaint refers to damages, we advise you to check if your product has a warranty. Visit our Warranty Policy page for more details.


                        <br>How do I request for a return?
                        <br>•	Option 1: Communicating with us by Facebook page or NogorHat website.
                        <br>•	Option 2: By calling NogorHat’s Customer Service on +88 01919160373.
                        <br>•	Option 3: Directly drop off the product at the office premises or by post by Sundarban Courier Service.
                        <br>Option 4: Request online by clicking on My Account followed by clicking on the Return/Replacement section then “Request new Return”.

                        <br><br>How to request a refund and what are the conditions?
                        <br>Refunds are made only when the request is made within 3 calendar days of the purchase. And the purchased product must be in sealed/intact condition to be eligible for a refund. Otherwise, there will be no option for any refund.

                        <br><br>How long does the validation or invalidation of the refund take?
                        <br>This quality evaluation process takes at least 7 business days depending on the refund method. Once completed, we will send you an e-mail or call you to give you the result of the quality evaluation.

                        <br><br>Can you request an exchange rather than a refund?
                        <br>If you prefer to exchange your product, just let Customer Service know and we will call you as soon as your product has been received, and we have looked into the availability of the requested product. But the product must be totally sealed/intact for any exchange.
                        <br>If you choose a refund voucher, you can also use it to buy any product on pickaboo.com within the voucher amount.



                        <br><br>If your returned product is not validated for return, how are you informed?
                        <br>If your return is invalid, then we will call you to explain the issue and send the item back to you. We will arrange the delivery of the item. You can still avail warranty if you have.
                    </p>

                    <h3><strong>NOTE:</strong></h3>
                    <p style="text-align: justify;">
                        ★   We will make 3 attempts to return the product to you. However, after this, we will cancel the return procedure but we will keep the product with us for a maximum of 15 days for you to retrieve from our office premises.
                    </p>


>>>>>>> 41209d47a1c49207f7ebb09e9ea8830b9952cfa8
                </div>
            </div>
        </div>
    </div>
@endsection
