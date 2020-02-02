@extends('frontend/layouts/master')
@section('title','Privacy Policy')

@section('content')
    @include('frontend/partials/content_top')

    <div class="about_section_aera">
        <div class="container about_container">
            <div class="row no-gutters align-items-center">
                <div class="col-md-12">
                    @foreach($privacy_policies as $privacy_policy)
                        {{-- <h1>{{ $privacy_policy->title }}</h1> --}}
                        <p>
                            {!! $privacy_policy->description !!}
                        </p>
                    @endforeach

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
