@extends('frontend/layouts/master')
@section('title','Checkout')


@section('content')
    @include('frontend/partials/content_top')
    <!--Checkout page section-->
    <div class="Checkout_page_section">
        <div class="container">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$error}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="checkout_form" id="confirm_order">
                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h3>Billing Details</h3>
                                @if(Auth::check())
                                <h3>
                                    <input id="sell_my_self" type="checkbox" name="sell_my_self" value="1"> Myself
                                </h3>
                                @else
                                    <div class="card p-3">
                                        <h5>
                                            <i class="fa fa-hand-o-right"></i>
                                            If You want Buy Your User ID
                                            <a href="{{ route('login') }}" class="btn-sm h2 btn-primary">Login</a>
                                        </h5>
                                        
                                        <h5>
                                            <i class="fa fa-hand-o-right"></i>
                                            If You want Create Account then Buy 
                                            <a href="{{ route('register') }}" class="btn-sm btn-info">Register</a>
                                        </h5>
                                        <hr class="p-0 m-0">
                                        <h5>
                                            OR Buy Without Account
                                        </h5>
                                    </div>
                                @endif
                                <div id="sell_for_other" class="row">
                                    <div class="col-lg-12 mb-30">
                                        <label>Name <span>*</span></label>
                                        <input type="text" class="large_input" name="name" v-model="order.name">
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label> Email Address   <span>*</span></label>
                                        <input type="email" class="large_input" name="email" v-model="order.email">
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label>Phone<span>*</span></label>
                                        <input type="number" class="large_input" name="phone_no" v-model="order.phone_no">

                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <label>Shipping Address<span>*</span></label>
                                        <textarea id="shipping_address" class="form-control" rows="2" name="shipping_address" v-model="order.shipping_address" spellcheck="false"></textarea>
                                    </div>

                                    <div class="col-lg-12 mb-30">
                                        <label>Additional Message (optional)</label>
                                        <textarea id="message" class="form-control" rows="2" name="message" v-model="order.message" spellcheck="false"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="order_form_two">
                                    <h3>Your order</h3>
                                </div>
                                <div class="order_wrapper">
                                    <div class="order-table table-responsive mb-30">
                                        <table class="table-striped  table-sm">
                                                <thead>
                                                    <tr style="border-bottom: 1px solid #c1c1c1;">
                                                        <th class="product-name">Product</th>
                                                        <th class="product-name">Price</th>
                                                        <th class="product-name">Quantity</th>
                                                        <th class="product-total text-center">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="border-bottom: 2px solid #c1c1c1;">
                                                    @php  $totalAmount = 0 @endphp
                                                    @foreach(App\Models\Cart::totalCarts() as $cart)
                                                        <tr>
                                                            <td class="product-name" style="display: inline-flex;">
                                                                <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                                                                    <span> {{ $cart->product->title }}</span>
                                                                </div>
                                                                <input type="text" name="product_quantity[]" v-model="order.product_quantity[]" value="{{ $cart->product_quantity }}" class="d-none">
							                                    <input type="text" name="order_products[]" v-model="order.order_products[]" value="{{ $cart->product->id }}" class="d-none">
                                                            </td>
                                                            <td class="">
                                                                <strong> {{ $cart->product->price }}</strong>
                                                            </td>
                                                            <td class="">
                                                                <strong> × {{ $cart->product_quantity }}</strong>
                                                            </td>
                                                            <td class="amount text-center"> {{ $cart->product->price }} TK</td>
                                                        </tr>
                                                        @php  $totalAmount += $cart->product->price * $cart->product_quantity @endphp
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr style="border-bottom: 1px solid #c1c1c1;">
                                                        <th>Cart Subtotal</th>
                                                        <th></th>
                                                        <th></th>
                                                        <td class="text-center">{{ $totalAmount }} Tk</td>
                                                    </tr>
                                                    <tr style="border-bottom: 1px solid #c1c1c1;">
                                                        <th>Shipping</th>
                                                        <th></th>
                                                        <th></th>
                                                        <td class="text-center"><strong>100 Tk</strong></td>
                                                    </tr>
                                                    <tr class="order_total" >
                                                        <th>Order Total</th>
                                                        <th></th>
                                                        <th></th>
                                                        <td style="width: 120px;" class="text-center"><strong>{{ $totalAmount + 100 }} Tk</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                    </div>
                                    <div class="order_button">
                                        <button type="submit" _@click="store(order)">Order Confirmed</button>
                                    </div>
                            </div>

                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection

@push('scripts')
<script>

    $(function(){
      $('#sell_my_self').click(function(){
            if ($(this).is(':checked')) {
                $('#sell_for_other').hide();
            }else{
                $('#sell_for_other').show();
                
            }
        });
    });

    //var csrf_token = '{{ csrf_token() }}';
    //var store_req = '{{ route('checkout.store') }}';

    //var app = new Vue({
    //    el: '#confirm_order',
    //    data: {
    //        order: {
    //            payment_id:'',
    //            name:'',
    //            phone_no:'',
    //            shipping_address:'',
    //            email:'',
    //            message:'',
    //            transaction_id:'',
    //            product_quantity:[],
    //            order_products:[]
    //        }
    //    },
    //    methods:{
    //        store:function (data) {

    //            console.log(data);
    //            // data._token = csrf_token
    //            // this.$http.post(store_req + '/',data)
    //            //     .then( function (res) {
    //            //         console.log(res)
    //            //     })
    //        }
    //    }
    //  })
</script>
@endpush
