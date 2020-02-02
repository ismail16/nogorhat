@extends('frontend/layouts/master')
@section('title','Returns and Replacement')

@section('content')
    @include('frontend/partials/content_top')

    <div class="about_section_aera">
        <div class="container about_container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($return_replacements as $return_replacement)
                        {{-- <h1>{{ $return_replacement->title }}</h1> --}}
                        <p>
                            {!! $return_replacement->description !!}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
