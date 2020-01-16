@extends('admin.layouts.master')
@section('title','Create New Supplier')

@push('css')

@endpush

@section('content')
    <section class="content">
            <div class="row">
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('admin.supplier.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Sub-Category</a>
                        </div>
                        <form method="POST" action="{{route('admin.supplier.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-1 control-label">Name</label>
                                    <div class="col-sm-11">
                                        <input type="text" name="name" required class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-1 control-label">Phone</label>
                                    <div class="form-group col-sm-4">
                                        <input type="number" name="phone" required class="form-control" id="name" placeholder="Phone Number">
                                    </div>
                                    <label class="col-sm-1"></label>
                                    <label class="col-sm-1 control-label">Email</label>
                                    <div class="form-group col-sm-5">
                                        <input type="email" name="email" required class="form-control" id="name" placeholder="Email">
                                    </div>

                                    <label class="col-sm-1 control-label">Address</label>
                                    <div class="form-group col-sm-5">
                                        <textarea name="address" id="" cols="40" rows="3"></textarea>
                                    </div>

                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-md-1 col-sm-4" style="padding-left: 25px;">
                                        <input type="radio" name="status" value="1" required class="form-check-input" id="active">
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <input type="radio" name="status" value="0" class="form-check-input" id="deactive">
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.supplier.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection


@push('scripts')

@endpush
