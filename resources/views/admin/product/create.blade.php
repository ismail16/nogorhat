@extends('admin.layouts.master')
@section('title','Create New Product')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/summernote/summernote-bs4.css')}}">
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
                            <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Category</a>
                        </div>
                        <form method="POST" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Product Title">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category_id" id="" class="form-control">
                                                <option value="">Hello</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select name="subcategory_id" id="" class="form-control">
                                                <option value="">Hello</option>
                                                <option value="">Hello</option>
                                                <option value="">Hello</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <select name="supplier_id" id="" class="form-control">
                                                <option value="">Hello</option>
                                                <option value="">Hello</option>
                                                <option value="">Hello</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Old Price</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Descriptions</label>
                                            <textarea class="textarea"  name="description" placeholder="Product Descriptions" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group row">
{{--                                    <label class="col-sm-2 control-label">Image</label>--}}
{{--                                    <div class="form-group col-sm-4">--}}
{{--                                        <input type="file" name="image">--}}
{{--                                    </div>--}}

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
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection


@push('scripts')
    <script src="{{asset('backend_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endpush
