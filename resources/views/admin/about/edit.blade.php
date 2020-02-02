@extends('admin.layouts.master')
@section('title','Edit About Us')

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
                            <a href="{{route('admin.about.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Category</a>
                        </div>
                        <form method="POST" action="{{route('admin.about.update', $about->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ $about->title }}" class="form-control" placeholder="Product Title">
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Descriptions</label>
                                            <textarea class="textarea"  name="description" rows="20" placeholder="Product Descriptions" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $about->description }} </textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.about.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
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
