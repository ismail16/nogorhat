@extends('admin.layouts.master')
@section('title','Payment Confirmation')

@push('css')

@endpush

@section('content')
<div class="container" id="printarea">
    <div class="row">
      <div class="col-12" style="padding: 0px 50px">
          <form action="" method="post">
              @csrf
              @method('PUT')
              <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Name </label>
                                <input type="text" name="store_name" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Logo </label>
                                <input type="file" name="store_logo" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store title </label>
                                <input type="text" name="store_title" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Phone</label>
                                <input type="text" name="store_phone" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Etore Email</label>
                                <input type="email" name="store_email" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Website</label>
                                <input type="text" name="store_website" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Currency</label>
                                <input type="text" name="store_currency" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Address</label>
                                <input type="text" name="store_address" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Footer Text</label>
                                <input type="text" name="footer_text" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Facebook Link</label>
                                <input type="text" name="facebook" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Instagram Link</label>
                                <input type="text" name="instagram" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Youtube Link</label>
                                <input type="text" name="youtube" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Twitter Link</label>
                                <input type="text" name="twitter" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">LinkedIn Link</label>
                                <input type="text" name="linkedIn" value="" class="form-control form-control-sm col-md-7">
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
