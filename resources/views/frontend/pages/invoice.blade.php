<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{('frontend_assets/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container" id="printarea">
        <div class="row">
          <div class="col-12">
            <div class="invoice p-3 mb-3 card">

              <div>
                  <div class="row card-header">
                    <div class="col-12">
                    <h4>
                        <i class="fa fa-globe"></i> AdminLTE, Inc.
                        <small class="float-right">Date: 2/10/2014</small>
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
                                @php $total = 0 @endphp
                                @foreach(\App\Models\Order_detail::where('order_id',$order->id)->get() as $order)
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
                      <div class="col-12">

                          <button onclick="window.print()" class="btn btn-success float-right"><i class="fa fa-print"></i>
                              Print
                          </button>

                      </div>
                  </div>
                    </div>
                </div>
                </div>

                </div>
            </div>
            </div>
      </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
