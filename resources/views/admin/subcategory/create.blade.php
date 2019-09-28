@extends('admin.layouts.master')
@section('title','Create New Category')

@section('content')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables/dataTables.bootstrap4.css')}}">

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
                            <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Category</a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Photo</label>
                                    <div class="form-group col-sm-10">
                                        <input type="file" name="photo">
                                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose Photo</label> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" required class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-md-1 col-sm-4" style="padding-left: 25px;">
                                        <input type="radio" name="status" value="1" required class="form-check-input" id="active">
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <input type="radio" name="status" value="0" class="form-check-input" id="deactive">
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                    <label for="shop" class="col-sm-2 control-label">Shop</label>
                                    <div class="col-md-1 col-sm-4" style="padding-left: 25px;">
                                        <input type="radio" name="shop" value="1" required class="form-check-input" id="yes">
                                        <label class="form-check-label text-success font-weight-bold" for="yes">Yes</label>
                                    </div>
                                    <div class="col-md-1 col-sm-4">
                                        <input type="radio" name="shop" value="0" class="form-check-input" id="no">
                                        <label class="form-check-label text-danger font-weight-bold" for="no">No</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-plus"></i> Add</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection


@push('scripts')

@endpush
