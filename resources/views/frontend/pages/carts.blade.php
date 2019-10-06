@extends('frontend/layouts/master')

@section('content')
    <div class="breadcrumbs_area contact_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <div class="breadcrumb_header">
                            <a href="index.html"><i class="fa fa-home"></i></a>
                            <span><i class="fa fa-angle-right"></i></span>
                            <span> Shopping Cart</span>
                        </div>
                        <div class="breadcrumb_title">
                            <h2>Shopping Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shopping_cart_details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
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
                                @php
                                   $cards =  App\Models\Cart::totalCarts();
                                    $totalAmount = 0;
                                @endphp
                                @if(count($cards) > 0)
                                @foreach($cards as $cart)
                                    <tr id="update_order">
                                        <td class="product_remove">
                                            <form class="form-inline d-flex justify-content-center" action="{{ route('card.destroy',$cart->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </td>
                                        <td class="product_name"><a href="#">{{ $cart->product->title }}</a></td>
                                        <td class="product_thumb"><a href="#"><img src="{{ asset('images/product_image/'.$cart->product->product_image->first()->image) }}" height="50" alt=""></a></td>
                                        <td class="product-price">Tk {{ $cart->product->price }}</td>
                                        <td class="product_quantity">
                                            <div class="input-group">
{{--                                                <form class="form-inline" action="{{ route('card.update',$cart->id) }}" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('PUT')--}}
<input type="number" name="product_quantity" class="form-control" value="{{ $cart->product_quantity }}"/>
<button class="btn btn-info btn-md ml-2" @click.prevent="card_update({{ $cart->id }})"><i class="fa fa-refresh"></i></button>
{{--                                                </form>--}}
                                            </div>
                                        </td>
                                        <td class="product_total">Tk {{ $cart->product->price * $cart->product_quantity }} </td>
                                    </tr>
                                   @php  $totalAmount += $cart->product->price * $cart->product_quantity @endphp
                                @endforeach
                                @else
                                    <tr>
                                        <th colspan="6">
                                            <div class="text-center alert alert-warning alert-dismissible fade show p-4 m-4">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>Opps!</strong> Cart is Emty !!
                                            </div>
                                        </th>
                                    </tr>
                                @endif
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
{{--                                            <p class="cart_amount"><span>Flat Rate:</span>100 Tk</p>--}}
                                            <p class="cart_amount"> 100 Tk</p>
                                        </div>
{{--                                        <a href="#">Calculate shipping</a>--}}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
{{--        var csrf_token = '{{ csrf_token() }}';--}}
                {{--        var update_req = '{{ route('card.update') }}';--}}
{{--        var cards = '{{App\Models\Cart::totalCarts()}}'--}}

        var app = new Vue({
            el: '#update_order',
            data: {
                // cards: [],
                // card:{
                //     product_quantity: 45
                // }
                // console.log(cards);
            },
            // props: ['data_2'],

            mounted(){
                // console.log(this.data_2);
                // this.$http.get(update_req + '/',data)
                //     .then( function (res) {
                //         console.log(res)
                //     })
            },
            methods:{
                card_update:function (data) {
                    // data._token = csrf_token

                    console.log(data);

                    // this.$http.put(update_req + '/',data)
                    //     .then( function (res) {
                    //         console.log(res)
                    //     })
                }
            }
        })
    </script>
@endpush
