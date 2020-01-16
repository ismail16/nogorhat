@extends('admin.layouts.master')
@section('title','Payment Confirmation')

@push('css')

@endpush

@section('content')
<div class="container" id="printarea">
    <div class="row">
      <div class="col-12" style="padding: 0px 50px">
          <form action="{{route('admin.setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Name </label>
                                <input type="text" name="store_name" value="{{ $setting->store_name }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Logo </label>
                                <input type="file" name="store_logo" class="form-control form-control-sm col-md-4">
                                <img class="col-md-3" src="{{ asset('images/store_logo/'.$setting->store_logo) }}" alt="" style="height: 40px; width: 40px;">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store title </label>
                                <input type="text" name="store_title" value="{{ $setting->store_title }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Phone</label>
                                <input type="text" name="store_phone" value="{{ $setting->store_phone }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Etore Email</label>
                                <input type="email" name="store_email" value="{{ $setting->store_email }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Website</label>
                                <input type="text" name="store_website" value="{{ $setting->store_website }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Currency</label>
                                <input type="text" name="store_currency" value="{{ $setting->store_currency }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Address</label>
                                <input type="text" name="store_address" value="{{ $setting->store_address }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Footer Text</label>
                                <input type="text" name="footer_text" value="{{ $setting->footer_text }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Facebook Link</label>
                                <input type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Instagram Link</label>
                                <input type="text" name="instagram" value="{{ $setting->instagram }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Youtube Link</label>
                                <input type="text" name="youtube" value="{{ $setting->youtube }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Twitter Link</label>
                                <input type="text" name="twitter" value="{{ $setting->twitter }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">LinkedIn Link</label>
                                <input type="text" name="linkedIn" value="{{ $setting->linkedIn }}" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-footer" role="group" aria-label="Basic example">
                    <a href="{{route('admin.order.index')}}" type="button" class="btn btn-sm btn-default mr-2">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-success float-right"><i class="fas fa-sync-alt"></i>
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
</div>
<style>
    .form-group{
        margin-bottom: 5px;
    }
</style>
@endsection


@push('scripts')

@endpush
