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
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Payment Title </label>
                                <input type="text" name="title" value="Paypal" class="form-control form-control-sm col-md-9">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Paypal ClientId</label>
                                <input type="text" name="ClientId" value="12548697592" class="form-control form-control-sm col-md-9">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Paypal Secret</label>
                                <input type="text" name="Secret" value="" class="form-control form-control-sm col-md-9">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Payemnt Currency</label>
                                <input type="text" name="currency" value="USD" class="form-control form-control-sm col-md-9">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Payemnt Description</label>
                                <input type="text" name="Description" value="Description" class="form-control form-control-sm col-md-9">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Paypal Account Type</label>
                                <select class="form-control form-control form-control-sm col-md-9" name="SandboxStatus">
                                  <option>Sandbox Account</option>
                                  <option>Live Account</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Paypal Activation</label>
                                <select class="form-control form-control form-control-sm col-md-9" name="Status">
                                  <option value="0">Paypal Deactive as Payment Method</option>
                                  <option value="1">Paypal Active as Payment Method</option>
                                </select>
                            </div>
                        </div>


                        <!-- <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-6"></label>
                                <div class="icheck-primary d-inline col-md-6">
                                    <input type="checkbox" id="checkboxPrimary3">
                                    <label for="checkboxPrimary3">
                                        Sandbox Active
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4"></label>
                                <div class="icheck-primary d-inline col-md-8">
                                    <input type="checkbox" id="checkboxPrimary3">
                                    <label for="checkboxPrimary3">
                                        Is Paypal Active as Payment Method
                                    </label>
                                </div>
                            </div>
                        </div> -->

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
