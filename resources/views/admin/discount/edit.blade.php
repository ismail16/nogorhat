@extends('admin.layouts.master')
@section('title','Create New Discount')

@push('css')

@endpush

@section('content')
    <section class="content">
            <div class="row">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                            <div class="alert alert-danger text-center pr-3 pl-3 p-1 mb-1">
                                {{$error}}
                                <button type="button" class="close ml-3" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('admin.discount.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All discount</a>
                        </div>
                        <form method="POST" action="{{route('admin.discount.update',$discount->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Discount Title</label>
                                        <div class="">
                                            <input type="text" name="title" value="{{ $discount->title }}" class="form-control form-control-sm" placeholder="Title" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Discount Amount</label>
                                        <div class="">
                                            <input type="text" name="discount" value="{{ $discount->discount }}" class="form-control form-control-sm" placeholder="Discount Amount" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Start Time</label>
                                        <div class="">
                                            <input type="date" name="start_time" value="{{ $discount->start_time }}" class="form-control form-control-sm" placeholder="Name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>End Time</label>
                                        <div class="">
                                            <input type="date" name="end_time" value="{{ $discount->end_time }}" class="form-control form-control-sm" placeholder="End Time" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Discount Code</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <input type="text" name="discount_code" value="{{ $discount->discount_code }}" class="form-control form-control-sm" placeholder="Discount Code" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-sm btn-info">Genarate</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Status</label>
                                        <div class="form-group row">
                                            <div class="col-md-3 pl-5">
                                                <input type="radio" name="status" value="1" {{ $discount->status == 1? 'checked':'' }} class="form-check-input">
                                                <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="radio" name="status" value="0" {{ $discount->status == 0? 'checked':'' }} class="form-check-input">
                                                <label class="form-check-label text-danger font-weight-bold">Deactive</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.discount.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-sync"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection


@push('scripts')

@endpush
