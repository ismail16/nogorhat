@extends('admin.layouts.master')
@section('title','Create New Product')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/summernote/summernote-bs4.css')}}">
    <style type="text/css">
        .note-editor.note-frame .note-editing-area .note-editable {
            min-height: 50px;
        }
    </style>
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
                            <a href="{{route('admin.slider.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Slider</a>
                        </div>
                        <form method="POST" action="{{route('admin.slider.update', $slider->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body pb-0 pt-1">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control form-control-sm" placeholder="Slider Title">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Slider Image</label>
                                            <input type="file" name="image" class="form-control form-control-sm p-1" id="myFile">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <img src="{{ asset('images/slider_image/'.$slider->image) }}" class="img-fluid" width="100" alt="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Message Show In Slider</label>
                                            <textarea class="textarea"  name="slider_text" rows="5" placeholder="Product Descriptions" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $slider->slider_text }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Button Text</label>
                                            <input type="text" name="button_text" value="{{ $slider->button_text }}" class="form-control form-control-sm" placeholder="Button Text">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Button Link</label>
                                            <input type="text" name="button_link" value="{{ $slider->button_link }}" class="form-control form-control-sm" placeholder="Button Link">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Text Position</label>
                                        </div>
                                        <div class="">
                                            <div class="form-check-inline ml-3">
                                                <label class="form-check-label">
                                                    <input type="radio" name="text_position" value="left" class="form-check-input" {{ $slider->text_position == 'left' ? 'checked':'' }}>
                                                    <span class="form-check-label font-weight-bold" for="deactive">Left</span>
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="text_position" value="center" class="form-check-input" {{ $slider->text_position == 'center' ? 'checked':'' }}>
                                                    <span class="form-check-label font-weight-bold">Center</span>
                                                </label>
                                            </div>

                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="text_position" value="right" class="form-check-input" {{ $slider->text_position == 'right' ? 'checked':'' }}>
                                                    <span class="form-check-label font-weight-bold">Right</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                        </div>
                                        <div class="">
                                            <div class="form-check-inline ml-3">
                                                <label class="form-check-label">
                                                    <input type="radio" name="status" value="0" class="form-check-input" {{ $slider->status == 0 ? 'checked':'' }}>
                                                    <span class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</span>
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="status" value="1" class="form-check-input" {{ $slider->status == 1 ? 'checked':'' }}>
                                                    <span class="form-check-label text-success font-weight-bold">Active</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.slider.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-sync"></i> Update Slider</button>
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
