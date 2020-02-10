@extends('frontend/layouts/master')
@section('title','Terms Conditions')

@section('content')
    @include('frontend/partials/content_top')

    <div class="about_section_aera">
        <div class="container about_container">
            <div class="row">
                <div class="col-lg-12 col-md-18 col-sm-22 text-left">
                   @foreach($terms_conditions as $terms_condition)
                        <p>
                            {!! $terms_condition->description !!}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
