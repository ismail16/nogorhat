@extends('admin.layouts.master')
@section('title','Payment Confirmation')

@push('css')

@endpush

@section('content')
<div class="container" id="printarea">
    <div class="row">
      <div class="col-12" style="padding: 0px 50px">
          <form action="{{route('admin.paypalUpdate',1)}}" method="post" enctype="multipart/form-data">
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
                                <label class="col-form-label col-md-4">Store title </label>
                                <input type="text" name="store_title" value="" class="form-control form-control-sm col-md-7">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Store Phone</label>
                                <input type="text" name="store_phone" value="" class="form-control form-control-sm col-md-7">
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
