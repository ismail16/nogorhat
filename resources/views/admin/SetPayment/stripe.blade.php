@extends('admin.layouts.master')
@section('title','Stripe Payment Configuration')

@push('css')

@endpush

@section('content')
<section class="content session_contect">
        <div class="row">
            @if(session()->has('message'))
                <div class="col-lg-12 col-xl-12 d-flex justify-content-center session_message">
                    <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                        {{session('message')}}
                        <button type="button" class="close ml-4" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$error}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="col-12">
            <form action="{{route('admin.stripeUpdate', $stripe->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Stripe SecretKey
                                        (<small class="text-muted"> Set Your Stripe SecretKey </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="SecretKey" value="{{ $stripe->SecretKey }}" class="form-control form-control-sm"> 
                                </div> 
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Stripe PublishableKey
                                        (<small class="text-muted"> Set Your Stripe PublishableKey </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="PublishableKey" value="{{ $stripe->PublishableKey }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Stripe Account Type
                                        (<small class="text-muted"> Set Stripe Sandbox/Live </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control form-control-sm" name="SandboxStatus">
                                      <option value="1" {{ $stripe->SandboxStatus == 1 ?'selected':''}}>Sandbox Account</option>
                                      <option value="0" {{ $stripe->SandboxStatus == 0 ?'selected':''}}>Live Account</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Stripe Activation
                                        (<small class="text-muted"> Set Stripe Active/Deactive </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control form-control-sm {{$stripe->Status == 1?'border-success':'border-danger'}}" name="Status">
                                        <option class="text-danger" value="0" {{ $stripe->Status == 0 ?'selected':''}}>Stripe Deactive as Payment Method</option>
                                        <option class="text-success" value="1" {{ $stripe->Status == 1 ?'selected':''}}>Stripe Active as Payment Method</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" role="group" aria-label="Basic example">
                        <a href="{{route('admin.dashboard')}}" type="button" class="btn btn-sm btn-default mr-2">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-success float-right"><i class="fas fa-sync-alt"></i>
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
    .form-group{
        margin-bottom: 5px;
    }
</style>
@endsection


@push('scripts')

@endpush
