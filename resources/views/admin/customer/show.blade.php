@extends('admin.layouts.master')
@section('title','Customer Show')

@push('css')

@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Customer Details</h5>

                <div class="pl-5 pt-2">
                    <p class="card-text">
                        <b>Name</b> : {{ $customer->name }}
                    </p>
                    <p class="card-text">
                        <b>email</b> : {{ $customer->email }}
                    </p>
                    <p class="card-text">
                        <b>phone</b> : {{ $customer->phone }}
                    </p>
                    <p class="card-text">
                        <b>thana</b> : {{ $customer->thana }}
                    </p>
                    <p class="card-text">
                        <b>district</b> : {{ $customer->district }}
                    </p>
                    <p class="card-text">
                        <b>address</b> : {{ $customer->address }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


@push('scripts')

@endpush
