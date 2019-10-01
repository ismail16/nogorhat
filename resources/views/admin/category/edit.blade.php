@extends('admin.layouts.master')
@section('title','Edit New Category')

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
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('admin.category.update',$category->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $category->name }}" required class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Photo</label>
                                    <div class="form-group col-sm-4">
                                        <img height="65" width="100" src="{{asset('images/category_image/'.$category->image)}}"
                                             alt="{{$category->name}}">
                                        <input type="file" name="image">
                                    </div>
                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-md-1 col-sm-4" style="padding-left: 25px;">
                                        <input type="radio" name="status" value="1" {{ $category->status==1 ? 'checked':''  }} required class="form-check-input" id="active">
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <input type="radio" name="status" value="0" {{ $category->status==0 ? 'checked':''  }} class="form-check-input" id="deactive">
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
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
