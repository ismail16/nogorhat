@extends('admin.layouts.master')
@section('title','Edit Product')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/summernote/summernote-bs4.css')}}">
@endpush

@section('content')
    <section class="content">
        <div class="row">
            @if(session()->has('message'))
                <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                    <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                        {{session('message')}}
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Product</a>
                    </div>
                    <form method="POST" action="{{route('admin.product.update',$product->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ $product->title }}" class="form-control" placeholder="Product Title">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" id="" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id? 'selected':'' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Sub Category</label>
                                        <select name="sub_category_id" id="" class="form-control">
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}" {{ $product->sub_category_id == $subcategory->id? 'selected':'' }}>{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Supplier</label>
                                        <select name="supplier_id" id="" class="form-control">
                                            @foreach($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}" {{ $product->supplier_id == $supplier->id? 'selected':'' }}>{{ $supplier->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Old Price</label>
                                        <input type="number"  name="old_price"  value="{{ $product->old_price }}"class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>New Price</label>
                                        <input type="number" name="price" value="{{ $product->price }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number"  name="quantity"  value="{{ $product->quantity }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Descriptions</label>
                                        <textarea class="textarea"  name="description" placeholder="Product Descriptions" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <?php
                                    $product_images = App\Models\ProductImage::where('product_id', $product->id )->get();
                                    $product_image = $product_images->toArray();
                                ?>
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <h5>Image 1</h5>
                                        @if(isset($product_image[0]['image']))
                                            <img src="{{ asset('images/product_image/'.$product_image[0]['image']) }}" alt="" width="50px">
                                            <input type="hidden" value="{{ $product_image[0]['id'] }}"  name="product_id00" >
                                            <input type="hidden" value="{{ $product_image[0]['image'] }}"  name="product_image00" >
                                        @endif
                                        <input type="file" class="form-control" name="product_image0" id="product_image" >
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <h5>Image 2</h5>
                                        @if(isset($product_image[1]['image']))
                                            <img src="{{ asset('images/product_image/'.$product_image[1]['image']) }}" alt="" width="50px">
                                            <input type="hidden" value="{{ $product_image[1]['id'] }}"  name="product_id11" >
                                            <input type="hidden" value="{{ $product_image[1]['image'] }}"  name="product_image11" >
                                        @endif
                                        <input type="file" class="form-control" name="product_image1" id="product_image" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Image 3</h5>
                                        @if(isset($product_image[2]['image']))
                                            <img src="{{ asset('images/product_image/'.$product_image[2]['image']) }}" alt="" width="50px">
                                            <input type="hidden" value="{{ $product_image[2]['id'] }}"  name="product_id22" >
                                            <input type="hidden" value="{{ $product_image[2]['image'] }}"  name="product_image22" >
                                        @endif
                                        <input type="file" class="form-control" name="product_image2" id="product_image" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Image 4</h5>
                                        @if(isset($product_image[3]['image']))
                                            <img src="{{ asset('images/product_image/'.$product_image[3]['image']) }}" alt="" width="50px">
                                            <input type="hidden" value="{{ $product_image[3]['id'] }}"  name="product_id33" >
                                            <input type="hidden" value="{{ $product_image[3]['image'] }}"  name="product_image33" >
                                        @endif
                                        <input type="file" class="form-control" name="product_image3" id="product_image" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Image 5</h5>
                                        @if(isset($product_image[4]['image']))
                                            <img src="{{ asset('images/product_image/'.$product_image[4]['image']) }}" alt="" width="50px">
                                            <input type="hidden" value="{{ $product_image[4]['id'] }}"  name="product_id44" >
                                            <input type="hidden" value="{{ $product_image[4]['image'] }}"  name="product_image44" >
                                        @endif
                                        <input type="file" class="form-control" name="product_image4" id="product_image" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                    </div>
                                    <div class="">
                                        <div class="form-check-inline ml-3">
                                            <label class="form-check-label">
                                                <input type="radio" name="status" value="0" {{ $product->status == 0? 'checked':'' }} class="form-check-input">
                                                <span class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</span>
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="status" value="1" {{ $product->status == 1? 'checked':'' }} class="form-check-input">
                                                <span class="form-check-label text-success font-weight-bold">Active</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                            <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-sync"></i> Update</button>
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
