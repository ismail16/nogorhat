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
                                            <textarea id="shipping_address" class="form-control" rows="2" name="shipping_address" v-model="order.shipping_address" spellcheck="false"></textarea>
                                        </div>

                                        <div class="col-lg-12 mb-30">
                                            <label>Additional Message (optional)<span>*</span></label>
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
        }else if ($payment_method == "cash_in") {
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
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endpush
