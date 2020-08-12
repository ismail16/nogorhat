@extends('admin.layouts.master')
@section('title','Paypal Payment Configuration')

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
            <form action="{{route('admin.paypalUpdate', $paypal->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Paypal ClientId
                                        (<small class="text-muted"> Set Your Paypal App ClientId </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="ClientId" value="{{ $paypal->ClientId }}" class="form-control form-control-sm"> 
                                </div> 
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Paypal Secret
                                        (<small class="text-muted"> Set Your Paypal App Secret </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="Secret" value="{{ $paypal->Secret }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Paypal Account Type
                                        (<small class="text-muted"> Set Paypal Sandbox/Live </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control form-control-sm" name="SandboxStatus">
                                      <option value="1" {{ $paypal->SandboxStatus == 1 ?'selected':''}}>Sandbox Account</option>
                                      <option value="0" {{ $paypal->SandboxStatus == 0 ?'selected':''}}>Live Account</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Paypal Activation
                                        (<small class="text-muted"> Set Paypal Active/Deactive </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control form-control-sm {{$paypal->Status == 1?'border-success':'border-danger'}}" name="Status">
                                      <option value="0" {{ $paypal->Status == 0 ?'selected':''}}>Paypal Deactive as Payment Method</option>
                                      <option value="1" {{ $paypal->Status == 1 ?'selected':''}}>Paypal Active as Payment Method</option>
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
