@extends('frontend/layouts/master')
@section('title','Privacy Policy')

@section('content')
    @include('frontend/partials/content_top')

    <div class="about_section_aera">
        <div class="container about_container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-12 col-md-18 col-sm-22">
                    <h1>Privacy Policy</h1>
                    
                    <h2 style="text-align: center;">Who Are We?</h2>
                    <p>Pickaboo.com offers online shopping in Bangladesh for all kinds of electronic products such as mobiles, tablets, laptops, accessories, televisions, home appliances at best price. Corporate office located at House 10, Road 12, Block F, Niketan, Gulshan 1, Dhaka - 1212, Bangladesh</p>

                    <h2 style="text-align: center;"> What Do We Do with Your Information?</h2>
                    <p>Our eCommerce website or app may collect various type of required information if you want to place an order for the desired product you want to buy from us using the website or app. When you purchase something from our online store through the website or app, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address. We will receive, store and process your data for preparing your purchase order on our eCommerce site and will save it for any possible future allegation. We usually collect personal information such as your title, name, gender, date of birth, email address, postal address, delivery address (if different), telephone number, mobile number, payment procedure and another similar kind of information. When you browse our store, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system. With your permission, we may send you emails about our store, new products, and other updates.</p>


                    <h2 style="text-align: center;"> Third Party Policy</h2>
                    <p>We may pass your details to other companies affiliated with us only for the purpose of providing you better service. We may somewhat pass your details to our agents and subcontractors to help with analyzing data and providing us with marketing or customer service assistance. We may also use third parties to assist us with delivering products to you and to help us to collect payments from you. In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us. However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.</p>

                    <h2 style="text-align: center;"> Security of Your Information</h2>
                    <p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed. If you provide us with your credit card information, the information is encrypted using secure socket layer technology (SSL). Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional generally accepted industry standards. We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service. Visit our Terms and Conditions page to learn more about our complete terms of service.</p>


                    <h2 style="text-align: center;"> Your Right to Withdraw & Change</h2>
                    <p>If you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information and if you would like to access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact us at support@pickaboo.com.</p>

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
