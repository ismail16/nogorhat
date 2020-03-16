@extends('frontend/layouts/master')
@section('title','Cards')

@section('content')
    @include('frontend/partials/content_top')

    <div class="shopping_cart_details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        @php
                           $cards =  App\Models\Cart::totalCarts();
                            $totalAmount = 0;
                        @endphp
                        @if(count($cards) > 0)
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_name">Product</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($cards as $cart)
                                    <tr id="update_order">
                                        <td class="product_remove">
                                            <button class="btn btn-danger" onclick="delete_cart({{$cart->id}})"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                        <td class="product_name"><a href="#">{{ $cart->product->title }}</a></td>
                                        <td class="product_thumb"><a href="#"><img src="{{ asset('images/product_image/'.$cart->product->product_image->first()->image) }}" height="50" alt=""></a></td>
                                        <td class="product-price">Tk {{ $cart->product->price }}</td>
                                        <td class="product_quantity">
                                            <div class="input-group">
                                                <input type="number" min="1" name="product_quantity" class="form-control product_quantity_{{$cart->id}}" value="{{ $cart->product_quantity }}"/>
                                                <button class="btn btn-info btn-md ml-2" onclick="update_product_qnt({{$cart->id}},{{$cart->product_quantity}})"><i class="fa fa-refresh"></i></button>
                                            </div>
                                        </td>
                                        <td class="product_total">Tk {{ $cart->product->price * $cart->product_quantity }} </td>
                                    </tr>
                                   @php  $totalAmount += $cart->product->price * $cart->product_quantity @endphp
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="cart_total_amount">
                                    <div class="cart_subtotal">
                                        <p class="subtotal">Subtotal</p>
                                        <p class="cart_amount">{{ $totalAmount }} Tk</p>
                                    </div>
                                    <div class="flat_rate ">
                                        <div class="shipping_flat_rate">
                                            <p class="subtotal">Shipping</p>
                                            <p class="cart_amount"> 100 Tk</p>
                                        </div>
                                    </div>

                                    <div class="flat_rate ">
                                        <div class="shipping_flat_rate">
                                            <p class="subtotal">Discount</p>
                                            <p class="text-danger">- 100 Tk</p>
                                        </div>
                                    </div>

                                    <div class="cart_subtotal order">
                                        <p class="order_total">Total</p>
                                        <p class="order_amount">{{ $totalAmount + 100}} Tk</p>
                                    </div>
                                    <div class="cart_to_checkout">
                                        <a href="{{ route('checkout.index') }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center alert alert-warning alert-dismissible fade show p-4 m-4">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <h3><strong>Opps!</strong> Cart is Emty !!</h3>
                                    </div>
                                </div>
                           </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var token = '{{ csrf_token() }}'
        function update_product_qnt(id) {
            var product_quantity =$('.product_quantity_'+id)[0].valueAsNumber
            var url = "{{ url('cards/update/') }}"+'/'+id
            console.log(url)
            $.ajax({
                url: url,
                type: 'POST',
                data: {_token: token, id: id, product_quantity: product_quantity},
                success: function(data){
                    console.log(data.product_quantity);
                    window.location="{{ url('cards') }}"
                }
            });
        }

        function delete_cart(id) {
            var url = "{{ url('cards/delete/') }}"+'/'+id
            console.log(url)
            $.ajax({
                url: url,
                type: 'get',
                // data: {id: id},
                success: function(data){
                    console.log(data);
                    window.location="{{ url('cards') }}"
                }
            });
        }
    </script>
@endpush
