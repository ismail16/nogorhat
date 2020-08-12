@extends('admin.layouts.master')
@section('title','2Checkout Payment Configuration')

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
            <form action="{{route('admin.twoCheckoutUpdate', $twoCheckout->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        2Checkout SellerId
                                        (<small class="text-muted"> Set Your 2Checkout SellerId </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="SellerId" value="{{ $twoCheckout->SellerId }}" class="form-control form-control-sm"> 
                                </div> 
                            </div>

                            

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        2Checkout PrivateKey
                                        (<small class="text-muted"> Set Your 2Checkout PrivateKey </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="PrivateKey" value="{{ $twoCheckout->PrivateKey }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        2Checkout PublishableKey
                                        (<small class="text-muted"> Set Your 2Checkout PublishableKey </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="PublishableKey" value="{{ $twoCheckout->PublishableKey }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        2Checkout Account Type
                                        (<small class="text-muted"> Set 2Checkout Sandbox/Live </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control form-control-sm" name="SandboxStatus">
                                      <option value="1" {{ $twoCheckout->SandboxStatus == 1 ?'selected':''}}>Sandbox Account</option>
                                      <option value="0" {{ $twoCheckout->SandboxStatus == 0 ?'selected':''}}>Live Account</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        2Checkout Activation
                                        (<small class="text-muted"> Set 2Checkout Active/Deactive </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control form-control-sm {{$twoCheckout->status == 1?'border-success':'border-danger'}}" name="status">
                                        <option class="text-danger" value="0" {{ $twoCheckout->status == 0 ?'selected':''}}>2Checkout Deactive as Payment Method</option>
                                        <option class="text-success" value="1" {{ $twoCheckout->status == 1 ?'selected':''}}>2Checkout Active as Payment Method</option>
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
