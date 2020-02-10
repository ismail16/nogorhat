@extends('frontend/layouts/master')
@section('title','Contact us')

@section('content')
    @include('frontend/partials/content_top')

    <div class="contact_area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message">
                        <div class="contact_title">
                            <h2>Tell us your project</h2>
                        </div>
                        <form id="contact-form" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="name" placeholder="Name *" type="text" required>
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" placeholder="Email *" type="email">
                                </div>
                                <div class="col-lg-6">
                                    <input name="subject" placeholder="Subject *" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <input name="phone" placeholder="Phone *" type="text">
                                </div>

                                <div class="col-12">
                                    <div class="contact_textarea">
                                        <textarea placeholder="Message *" name="message" class="form-control2" required></textarea>
                                    </div>
                                    <button type="submit"> Send Message </button>
                                </div>
                                <div class="col-12">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_info_wrapper">
                        <div class="contact_title">
                            <h4>contact us</h4>
                        </div>
                        <div class="contact_info mb-15">
                            <ul>
                                <li><i class="fa fa-map-marker"></i>  Address : {{ $setting->store_address }}</li>
                                <li><i class="fa fa-phone"></i> {{ $setting->store_phone }}</li>
                                <li><i class="fa fa-envelope-o"></i> <a href="#"> {{ $setting->store_email }} </a></li>
                            </ul>
                        </div>
                        <div class="contact_info mb-15">
                            <div class="social_icone">
                                <ul>
                                    @isset ($setting->facebook)
                                        <li><a target="_blank" href="{{ $setting->facebook }}" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    @endisset
                                    @isset ($setting->instagram)
                                        <li><a target="_blank" href="{{ $setting->instagram }}" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                    @endisset
                                    @isset ($setting->youtube)
                                         <li><a target="_blank" href="{{ $setting->youtube }}" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                    @endisset
                                    @isset ($setting->twitter)
                                        <li><a target="_blank" href="{{ $setting->twitter }}" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                    @endisset
                                    @isset ($setting->linkedIn)
                                        <li><a target="_blank" href="{{ $setting->linkedIn }}" title="linkedIn"><i class="fa fa-linkedin"></i></a></li>
                                    @endisset
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
