@extends('author/layouts/dashboard')

@section('author-content')

<div class="col-10"  id="printableArea" style="padding: 0px 50px">

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
           <div class="row">
                <div class="col-2">
                    <div class="text-gray-light">
                        <b>INVOICE FROM:</b>
                    </div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRssAGE2IgyAAOVKocDHHTToh4mzBpegHegZV_dGQvd4PBCC32f&s" lass="img-fluid" width="50" data-holder-rendered="true"/>
                </div>
                <div class="col">                         
                    <h5 class="name">{{ $order->name }}</h5>
                    <div class="address">{{ $order->shipping_address }}</div>
                    <div class="email">{{  $order->phone_no }}</div>
                    <div class="email">{{ $order->email }}</div>
                </div>

                <div class="col company-details" style="text-align:right">
                    <div class="text-gray-light"><b>INVOICE TO:</b></div>
                    <h5 class="name">Name: {{$order->name}}</h5>
                    <div class="address">Phone: {{ $order->phone_no }}</div>
                    <div class="email">Email: {{ $order->email}}</div>
                    <div class="address">Is Paid: {{$order->is_paid}}</div>
                    <div class="address">Address: {{$order->shipping_address}}</div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Q.n</th>
                                <th class="text-center">Product</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center"></th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Subtotal</th>
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
                                <td class="text-center">{{ $loop->index+1 }}</td>
                                <td class="text-center w-25">{{ $product->title }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('images/product_image/'.$image->image) }}" height="50" alt="">
                                </td>
                                <td class="text-center">{{ $order->product_quantity }} </td>
                                <td>x</td>
                                <td class="text-center">{{ $product->price }} Tk</td>
                                <td class="text-right">{{ $order->product_quantity * $product->price}} Tk</td>
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
                                    <td colspan="2">Subtotal:</td>
                                    <td class="text-right">{{ $total }} Tk</td>
                                </tr>
                                <tr>
                                    <th colspan="2">Tax (0.0%)</th>
                                    <td class="text-right">0.00 Tk</td>
                                </tr>
                                <tr>
                                    <th colspan="2">Shipping:</th>
                                    <td class="text-right">100 Tk</td>
                                </tr>
                                <tr>
                                    <th colspan="2">Total:</th>
                                    <td class="text-red text-bold text-right">{{ $total+100 }} Tk</td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>

                <div class="row no-print card-footer">
                    <div class="col-12">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('author.orders')}}" type="button" class="btn btn-secondary mr-2">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="text-right" style="margin: -15px 0px 10px 0px;">
      <button onclick="printInvoice()" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
  </div>
</div>

<script>

function printInvoice() {
    var printContents = document.getElementById('printableArea').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>


@endsection
