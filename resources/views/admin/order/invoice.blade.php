@extends('admin.layouts.master')
@section('title','Invoice')

@push('css')

@endpush

@section('content')
    <div class="container" id="printarea">
        <div class="row">
          <div class="col-12">
            <div class="invoice p-3 mb-3 card">

              <div>
                  <div class="row card-header">
                    <div class="col-12">
                    <h4>
                        <i class="fa fa-globe"></i> AdminLTE, Inc.
                        <small class="float-right">Date: {{ $order->created_at }}</small>
                    </h4>
                    </div>
                </div>

                <div class="row invoice-info card-body pt-1 pb-0">
                    <div class="col-sm-4 invoice-col">
                    From
                    <address>
                    <strong>{{ $order->name }}</strong><br>
                        {{ $order->shipping_address }}<br>
                        Phone: {{ $order->phone_no }}<br>
                        Email: {{ $order->email }}
                    </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                    To
                    <address>
                    <strong>{{ $order->name }}</strong><br>
                        {{ $order->shipping_address }}<br>
                        Phone: {{ $order->phone_no }}<br>
                        Email: {{ $order->email }}
                    </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col text-right">
                    <b>Invoice #00{{ $order->id }}</b><br>
                    <br>
                    <b>Order ID:</b> 4F3S8J<br>
                    <b>Payment:</b> {{ $order->is_paid }}
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row card-body pt-0">
                    <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>455-981-221</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$64.50</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Need for Speed IV</td>
                        <td>247-925-726</td>
                        <td>Wes Anderson umami biodiesel</td>
                        <td>$50.00</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Monsters DVD</td>
                        <td>735-845-642</td>
                        <td>Terry Richardson helvetica tousled street art master</td>
                        <td>$10.70</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Grown Ups Blue Ray</td>
                        <td>422-568-642</td>
                        <td>Tousled lomo letterpress</td>
                        <td>$25.99</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="col-7">
                    <p class="lead">Payment Methods:</p>
                    <img src="{{ asset('backend_assets/dist/img/credit/visa.png') }}" alt="Visa">
                    <img src="{{ asset('backend_assets/dist/img/credit/mastercard.png') }}" alt="Mastercard">
                    <img src="{{ asset('backend_assets/dist/img/credit/american-express.png') }}" alt="American Express">
                    <img src="{{ asset('backend_assets/dist/img/credit/paypal2.png') }}" alt="Paypal">

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                        plugg
                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                    </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                    <div class="table-responsive">
                        <table class="table">
                        <tbody>
                            <tr>
                                <td>Subtotal:</td>
                                <th style="width:40%"></th>
                                <td>$250.30</td>
                            </tr>
                            <tr>
                                <th>Tax (9.3%)</th>
                                <th></th>
                                <td>$10.34</td>
                            </tr>
                            <tr>
                                <th>Shipping:</th>
                                <th></th>
                                <td>$5.80</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <th></th>
                                <td>$265.24</td>
                            </tr>
                        </tbody></table>
                    </div>
                    </div>
                </div>

                <div class="row no-print card-footer">
                    <div class="col-12">
                    <button onclick="window.print()" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                    <button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i> Submit
                        Payment
                    </button>
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> Generate PDF
                    </button>
                    </div>
                </div>
                </div>

                </div>
            </div>
            </div>
      </div>
@endsection


@push('scripts')

@endpush
