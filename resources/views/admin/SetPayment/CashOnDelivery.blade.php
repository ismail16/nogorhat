@extends('admin.layouts.master')
@section('title','Cash On Delivery Payment Configuration')

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
            <form action="{{route('admin.CashOnDeliveryUpdate', $CashOnDelivery->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Cash On Delivery Title
                                        (<small class="text-muted">Cash On Delivery Title </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="title" value="{{ $CashOnDelivery->title }}" class="form-control form-control-sm"> 
                                </div> 
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Cash On Delivery Activation
                                        (<small class="text-muted">Cash On Delivery Active/Deactive </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control form-control form-control-sm {{$CashOnDelivery->status == 1?'border-success':'border-danger'}}" name="status">
                                        <option class="text-danger" value="0" {{ $CashOnDelivery->status == 0 ?'selected':''}}>Cash On Delivery Deactive as Payment Method</option>
                                        <option class="text-success" value="1" {{ $CashOnDelivery->status == 1 ?'selected':''}}>Cash On Delivery Active as Payment Method</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Cash On Delivery Description
                                        (<small class="text-muted">Cash On Delivery Description </small>)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="textarea"  name="description" rows="20" placeholder="Product Descriptions" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $CashOnDelivery->description }}</textarea>
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
