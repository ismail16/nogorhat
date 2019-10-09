@extends('admin.layouts.master')
@section('title','Edit Sub-Category')

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
                            <a href="{{route('admin.subcategory.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Sub Category</a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('admin.subcategory.update',$subcategory->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $subcategory->name }}" required class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Category</label>
                                    <div class="form-group col-sm-4">
                                        <select class="form-control" name="category_id" id="">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected':''  }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-md-1 col-sm-4" style="padding-left: 25px;">
                                        <input type="radio" name="status" value="1" {{ $subcategory->status==1 ? 'checked':''  }} required class="form-check-input" id="active">
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <input type="radio" name="status" value="0" {{ $subcategory->status==0 ? 'checked':''  }} class="form-check-input" id="deactive">
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.subcategory.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-sync"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@push('scripts')

@endpush
