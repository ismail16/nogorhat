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
                
                    <div class="row">
                        <div class="col-md-6">
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
                                                    <input type="text" name="product_quantity[]" v-model="order.product_quantity[]" value="{{ $cart->product_quantity }}">
                                                    <input type="text" name="order_products[]" v-model="order.order_products[]" value="{{ $cart->product->id }}">
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
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="order_form_two">
                                <h3>Your payment</h3>
                            </div>
                            <div class="order_wrapper">
                                <div class="form-group mt-2">
                                    <h5>Select a payment method</h5>
                                    <div class="_col-md-6">
                                        <select class="form-control" name="payment_method" v-model="order.payment_method" required id="payments">
                                            <option value="stripe">Pay Your payment By Card</option>
                                            <option value="cash_in">cash_in</option>
                                            <option value="bkash">bkash</option>
                                            <option value="rocket">rocket</option>
                                            {{-- @foreach(App\Models\Payment::all() as $payment) --}}
                                            {{-- <option value="{{ $payment->short_name }}">{{ $payment->name }}</option> --}}
                                            {{-- @endforeach --}}
                                        </select>
                                        <div id="payment_stripe" class="box box-primary bg-light border mt-2">
                                            <div class="">
                                                <img class="img-fluid float-right" src="{{ asset('images/card.png') }}">
                                            </div>

                                                <form role="form" action="{{ route('payment_pay_store') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_T5wFaZtvqWHXkrOcBvUSC7Gl00UkI7ZYIk" id="payment-form">
                                                @csrf

                                                @csrf
                                                <input type="" name="order_id" value="{{$order_id}}">
                                                <input type="" name="totalAmount" value="{{$totalAmount + 100}}">
                                                <div class="box-body pt-5 pb-4 pr-4 pl-4">
                                                    <div class="form-group">
                                                        <label class='control-label'>Card holder Name</label>
                                                        <input class='form-control w-100' size='4' type='text' name="holder_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class='control-label'>Card Number</label>
                                                        <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                                    </div>
                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                            <label class='control-label'>CVC</label>
                                                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Month</label>
                                                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Year</label>
                                                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                                        </div>
                                                    </div>
                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-warning btn-block">Pay Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @foreach(App\Models\Payment::all() as $payment)
                                            @if($payment->short_name == "cash_in")
                                                <div id="payment_{{ $payment->short_name }}" class="alert alert-success mt-2 text-center">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center alert-warning">
                                                            <p style="font-size: 11px;">[N.B Shipping Cost In Dhaka 50 Tk and Outside Of Dhaka 100 Tk]</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($payment->short_name == "bkash" || $payment->short_name == "rocket")
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
                                        <div id="order_button" class="order_button" style="display: none;">
                                            <button type="submit" _@click="store(order)">Order Confirmed</button>
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
    {{--var csrf_token = '{{ csrf_token() }}';--}}
    {{--var store_req = '{{ route('checkout.store') }}';--}}

    {{--var app = new Vue({--}}
    {{--    el: '#confirm_order',--}}
    {{--    data: {--}}
    {{--        order: {--}}
    {{--            payment_id:'',--}}
    {{--            name:'',--}}
    {{--            phone_no:'',--}}
    {{--            shipping_address:'',--}}
    {{--            email:'',--}}
    {{--            message:'',--}}
    {{--            transaction_id:'',--}}
    {{--            product_quantity:[],--}}
    {{--            order_products:[]--}}
    {{--        }--}}
    {{--    },--}}
    {{--    methods:{--}}
    {{--        store:function (data) {--}}

    {{--            console.log(data);--}}
    {{--            // data._token = csrf_token--}}
    {{--            // this.$http.post(store_req + '/',data)--}}
    {{--            //     .then( function (res) {--}}
    {{--            //         console.log(res)--}}
    {{--            //     })--}}
    {{--        }--}}
    {{--    }--}}
    // })
</script>

<script type="text/javascript">
    $("#payments").change(function(){
        $payment_method = $("#payments").val();

        if ($payment_method == "stripe") {
            console.log('stripe');
            $("#payment_stripe").css('display','block');
            $("#payment_cash_in").css('display','none');
            $("#payment_bkash").css('display','none');
            $("#payment_rocket").css('display','none');
            $("#transaction_id").css('display','none');
            $("#order_button").css('display','none');
        }else if ($payment_method == "cash_in") {
            console.log('cash_in');
            $("#payment_cash_in").css('display','block');
            $("#payment_stripe").css('display','none');
            $("#payment_bkash").css('display','none');
            $("#payment_rocket").css('display','none');
            $("#transaction_id").css('display','none');
            $("#order_button").css('display','block');
        }else if ($payment_method == "bkash") {
            console.log('bkash');
            $("#payment_bkash").css('display','block');
            $("#payment_stripe").css('display','none');
            $("#payment_cash_in").css('display','none');
            $("#payment_rocket").css('display','none');
            $("#transaction_id").css('display','block');
            $("#order_button").css('display','block');
        }else if ($payment_method == "rocket") {
            console.log('rocket');
            $("#payment_rocket").css('display','block');
            $("#payment_stripe").css('display','none');
            $("#payment_bkash").css('display','none');
            $("#payment_cash_in").css('display','none');
            $("#transaction_id").css('display','block');
            $("#order_button").css('display','block');
        }
    })
</script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
 <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form         = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
                    $inputs       = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid         = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {

                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);

                } else {
                    // res ponse token contains id, last4, and card type
                    var token = response['id'];

                    console.log(token)
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endpush
