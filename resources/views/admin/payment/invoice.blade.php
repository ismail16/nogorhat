@extends('admin.layouts.master')
@section('title','Invoice')

@push('css')

@endpush

@section('content')
    <div class="container" id="printarea">
        <div class="row">
          <div class="col-12" style="padding: 0px 50px">
              <form action="{{ route('admin.order.update',$order->id) }}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="invoice p-5 mb-3 card">
              <div>
                  <div class="row card-header">
                    <div class="col-12">
                    <h4>
                        <i class="fa fa-globe"></i> NOGORHAT
                        <small class="float-right">Date: {{ date('d M Y h:i A', strtotime($order->created_at)) }}</small>
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
                            <th>Q.n</th>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th></th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 ; @endphp

                            @foreach( \App\Models\Order_detail::where('order_id',$order->id)->get() as $order)
                                @php
                                    $product = \App\Models\Product::where('id',$order->product_id)->first();
                                    $image = \App\Models\ProductImage::where('product_id',$order->product_id)->first();
                                @endphp
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>
                                        <img src="{{ asset('images/product_image/'.$image->image) }}" height="50" alt="">
                                    </td>
                                    <td class="text-center">{{ $order->product_quantity }} </td>
                                    <td>x</td>
                                    <td>{{ $product->price }} Tk</td>
                                    <td>{{ $order->product_quantity * $product->price}} Tk</td>
                                </tr>
                                @php $total+= $order->product_quantity * $product->price @endphp
                            @endforeach
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
                                    <td>{{ $total }} Tk</td>
                                </tr>
                                <tr>
                                    <th>Tax (0.0%)</th>
                                    <th></th>
                                    <td>0.00 Tk</td>
                                </tr>
                                <tr>
                                    <th>Shipping:</th>
                                    <th></th>
                                    <td>100 Tk</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <th></th>
                                    <td class="text-red text-bold">{{ $total+100 }} Tk</td>
                                </tr>
                            </tbody></table>
                        </div>
                        </div>
                    </div>

                <div class="row no-print card-footer">
                    <div class="col-12 text-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('admin.order.index')}}" type="button" class="btn btn-default mr-2">Cancel</a>
                            <button type="submit" class="btn btn-success float-right"><i class="fa fa-credit-card"></i>
                                Confirmed
                            </button>
                        </div>
                    </div>
                </div>
                </div>

                </div>
              </form>
              <div class="text-right" style="margin: -15px 0px 10px 0px;">
                  <button onclick="window.print()" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
              </div>
          </div>

        </div>
    </div>
@endsection


@push('scripts')

@endpush
