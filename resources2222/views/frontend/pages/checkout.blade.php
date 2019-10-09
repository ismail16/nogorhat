@extends('frontend/layouts/master')
@section('title','Checkout')


@section('content')
    @include('frontend/partials/content_top')

    <!--Checkout page section-->
    <div class="Checkout_page_section">
        <div class="container">
            <div class="checkout_form" id="confirm_order">
{{--                <form action="{{ route('checkout.store') }}" method="POST">--}}
{{--                    @csrf--}}
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-lg-12 mb-30">
                                            <label>Name <span>*</span></label>
                                            <input type="text" name="name" v-model="order.name">
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label> Email Address   <span>*</span></label>
                                            <input type="email" name="email" v-model="order.email">

                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label>Phone<span>*</span></label>
                                            <input type="number" name="phone_no" v-model="order.phone_no">

                                        </div>
                                        <div class="col-lg-12 mb-30">
                                            <label>Shipping Address<span>*</span></label>
                                            <textarea id="shipping_address" class="form-control" rows="4" name="shipping_address" v-model="order.shipping_address" spellcheck="false"></textarea>
                                        </div>

                                        <div class="col-lg-12 mb-30">
                                            <label>Additional Message (optional)<span>*</span></label>
                                            <textarea id="message" class="form-control" rows="4" name="message" v-model="order.message" spellcheck="false"></textarea>
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
                                                            </td>
                                                            <td class="">
                                                                <strong> × 2</strong>
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
                                                        <td class="text-center">{{ $totalAmount }} Tk</td>
                                                    </tr>
                                                    <tr style="border-bottom: 1px solid #c1c1c1;">
                                                        <th>Shipping</th>
                                                        <th></th>
                                                        <td class="text-center"><strong>100 Tk</strong></td>
                                                    </tr>
                                                    <tr class="order_total" >
                                                        <th>Order Total</th>
                                                        <th></th>
                                                        <td style="width: 120px;" class="text-center"><strong>{{ $totalAmount + 100 }} Tk</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                    </div>
                                    <div class="form-group mt-2">
                                        <h5>Select a payment method</h5>
                                        <div class="_col-md-6">
                                            <select class="form-control" name="payment_method" v-model="order.payment_method" required id="payments">
                                                <option value="cash_in">Select a payment method please</option>
                                                @foreach($payments as $payment)
                                                    <option value="{{ $payment->short_name }}">{{ $payment->name }}</option>
                                                @endforeach
                                            </select>

                                            @foreach($payments as $payment)
                                                @if($payment->short_name == "cash_in")
                                                    <div id="payment_{{ $payment->short_name }}" class="alert alert-success mt-2 text-center">
                                                        <h3>
                                                            For Cash in there is nothing necessary. Just click Finish Order.
                                                            <br>
                                                            <small>
                                                                You will get your product in two or three business days.
                                                            </small>
                                                        </h3>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center alert-warning">
                                                                <p style="font-size: 11px;">[N.B Shipping Cost In Dhaka 50 Tk and Outside Of Dhaka 100 Tk]</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div id="payment_{{ $payment->short_name }}" class="alert alert-success mt-2 text-center" style="display: none">
                                                        <h3>Payment</h3>
                                                        <p>
                                                            <strong>{{ $payment->name }}</strong>
                                                            <br>
                                                            <strong>Account Type: {{$payment->type}}</strong><br>
                                                            <strong>Bkash Number: 01983783387 Personal</strong>
                                                        </p>
                                                        <div class="alert alert-success">
                                                            Please send the above money to this Bkash Number and write your transaction code below there..
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center alert-warning">
                                                                <p style="font-size: 11px;">[N.B Shipping Cost In Dhaka 50 Tk and Outside Of Dhaka 100 Tk]</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <input type="text" name="transaction_id" v-model="order.transaction_id" id="transaction_id"  class="form-control hidden" placeholder="Enter transaction code" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button">
                                    <button type="submit" @click="store(order)">Order Confirmed</button>
                                </div>
                            </div>

                    </div>
{{--                </form>--}}
            </div>

        </div>
    </div>

@endsection

@push('scripts')
<script>
    var csrf_token = '{{ csrf_token() }}';
    var store_req = '{{ route('checkout.store') }}';

    var app = new Vue({
        el: '#confirm_order',
        data: {
            order: {
                payment_id:'',
                name:'',
                phone_no:'',
                shipping_address:'',
                email:'',
                message:'',
                transaction_id:''
            }
        },
        methods:{
            store:function (data) {
                data._token = csrf_token
                this.$http.post(store_req + '/',data)
                    .then( function (res) {
                        console.log(res)
                    })
            }
        }
    })
</script>

<script type="text/javascript">
    $("#payments").change(function(){
        $payment_method = $("#payments").val();

        if ($payment_method == "cash_in") {
            console.log('cash_in');
            $("#payment_cash_in").css('display','block');
            $("#payment_bkash").css('display','none');
            $("#payment_rocket").css('display','none');
            $("#transaction_id").css('display','none');
        }else if ($payment_method == "bkash") {
            console.log('bkash');
            $("#payment_bkash").css('display','block');
            $("#payment_cash_in").css('display','none');
            $("#payment_rocket").css('display','none');
            $("#transaction_id").css('display','block');
        }else if ($payment_method == "rocket") {
            console.log('rocket');
            $("#payment_rocket").css('display','block');
            $("#payment_bkash").css('display','none');
            $("#payment_cash_in").css('display','none');
            $("#transaction_id").css('display','block');
        }
    })
</script>
@endpush
