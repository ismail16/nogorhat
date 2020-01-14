@extends('admin.layouts.master')
@section('title','Payment Confirmation')

@push('css')

@endpush

@section('content')
<div class="container" id="printarea">
    <div class="row">
      <div class="col-12" style="padding: 0px 50px">
          <form action="{{ route('admin.payment.update', $payment->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Order ID </label>
                                <input type="text" name="order_id" value="{{ $payment->order_id }}" class="form-control form-control-sm col-md-7" disabled>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Payment Method </label>
                                <input type="text" name="peyment_method" value="{{ $payment->payment_method }}" class="form-control form-control-sm col-md-8" disabled>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Transaction ID</label>
                                <input type="text" name="transaction_id" value="{{ $payment->transaction_id }}" class="form-control form-control-sm col-md-7" disabled>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Total Ammount</label>
                                <input type="text" name="totalAmount" value="{{ $payment->amount }} TK" class="form-control form-control-sm col-md-8" disabled>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Date</label>
                                <input type="text" name="totalAmount" value="{{ $payment->created_at }}" class="form-control form-control-sm col-md-7" disabled>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-5">Payment Confirmation</label>
                                <select class="form-control form-control-sm col-md-7" name="payment_status">
                                    <option value="0" {{ $payment->status == 0? 'selected':''}}>NO</option>
                                    <option value="1" {{ $payment->status == 1? 'selected':''}}>Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer" role="group" aria-label="Basic example">
                    <a href="{{route('admin.order.index')}}" type="button" class="btn btn-default mr-2">Cancel</a>
                    <button type="submit" class="btn btn-success float-right"><i class="fa fa-credit-card"></i>
                        Recieved
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
</div>
@endsection


@push('scripts')

@endpush
