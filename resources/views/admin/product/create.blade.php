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
                            <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Category</a>
                        </div>
                        <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
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
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select name="sub_category_id" id="" class="form-control">
                                                @foreach($subcategories as $subcategory)
                                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <select name="supplier_id" id="" class="form-control">
                                                @foreach($suppliers as $supplier)
                                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Old Price</label>
                                            <input type="number"  name="old_price" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>New Price</label>
                                            <input type="number" name="price" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number"  name="quantity" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Descriptions</label>
                                            <textarea class="textarea"  name="description" rows="20" placeholder="Product Descriptions" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <h5>Image 1</h5>
                                            <input type="file" name="image[]" class="form-control p-1" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Image 2</h5>
                                            <input type="file" name="image[]" class="form-control p-1" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Image 3</h5>
                                            <input type="file" name="image[]" class="form-control p-1" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Image 4</h5>
                                            <input type="file" name="image[]" class="form-control p-1" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Image 5</h5>
                                            <input type="file" name="image[]" class="form-control p-1" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                        </div>
                                        <div class="">
                                            <div class="form-check-inline ml-3">
                                                <label class="form-check-label">
                                                    <input type="radio" name="status" value="0" class="form-check-input">
                                                    <span class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</span>
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="status" value="1" class="form-check-input">
                                                    <span class="form-check-label text-success font-weight-bold">Active</span>
                                                </label>
                                            </div>
                                        </div>
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
