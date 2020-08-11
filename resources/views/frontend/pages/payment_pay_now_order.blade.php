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
                                    <table class="table-striped  table-sm w-100">
                                        <thead>
                                            <tr style="border-bottom: 1px solid #c1c1c1;">
                                                <th class="product-name">Product</th>
                                                <th class="product-name">Quantity</th>
                                                <th class="product-total text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody style="border-bottom: 2px solid #c1c1c1;">

                                            @php  $totalAmount = 0 @endphp

                                            @foreach($order_details as $order_detail)
                                                @php
                                                    $product = App\Models\Product::find($order_detail->product_id);
                                                @endphp
                                                <tr>
                                                    <td class="product-name" style="display: inline-flex;">
                                                        <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                                                            <span> {{ $product->title }}</span>
                                                        </div>
                                                        <input type="hidden" name="product_quantity[]" v-model="order.product_quantity[]" value="{{ $order_detail->product_quantity }}">
                                                        <input type="hidden" name="order_products[]" v-model="order.order_products[]" value="{{ $order_detail->product_id }}">
                                                    </td>
                                                    <td class="">
                                                        <strong> × {{ $order_detail->product_quantity }}</strong>
                                                    </td>
                                                    <td class="amount text-center"> {{ $product->price }} TK</td>
                                                </tr>
                                            @php  $totalAmount += $product->price * $order_detail->product_quantity @endphp
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
                                        @php
                                            $PaypalSet = App\Models\PaypalSet::first();
                                            $StripeSet = App\Models\StripeSet::first();
                                            $twoCheckoutSet = App\Models\twoCheckoutSet::first();
                                            $CashOnDeliverySet = App\Models\CashOnDeliverySet::first();
                                        @endphp
                                        <select class="form-control" name="payment_method" v-model="order.payment_method" required id="payments">
                                            <option>Seletct Payment Method</option>
                                            @if ($StripeSet)
                                                @if ($StripeSet->Status == 1)
                                                    <option value="stripe">Stripe</option>
                                                @endif
                                            @endif

                                            @if ($PaypalSet)
                                                @if ($PaypalSet->Status == 1)
                                                    <option value="paypal">Paypal</option>
                                                @endif
                                            @endif

                                            @if ($twoCheckoutSet)
                                                @if ($twoCheckoutSet->status == 1)
                                                    <option value="2checkout">2checkout</option>
                                                @endif
                                            @endif

                                            @if ($CashOnDeliverySet)
                                                @if ($CashOnDeliverySet->status == 1)
                                                    <option value="cash_in">Cash On Delivery</option>
                                                @endif
                                            @endif
                                          {{--   <option value="bkash">bkash</option>
                                            <option value="rocket">rocket</option> --}}
                                        </select>

                                        <div id="payment_stripe" class="d-none box box-primary bg-light border mt-2">
                                            <h4 class="bg-warning text-center">Stripe</h4>
                                            <div class="">
                                                <img class="img-fluid float-right" src="{{ asset('images/card.png') }}">
                                            </div>

                                            <form role="form" action="{{ route('payment_pay_store') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_T5wFaZtvqWHXkrOcBvUSC7Gl00UkI7ZYIk" id="payment-form">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <input type="hidden" name="totalAmount" value="{{$totalAmount + 100}}">

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

                                        <div id="payment_paypal" class="d-none box box-primary bg-light border mt-2 d-none">
                                            <h4 class="bg-warning text-center">Paypal</h4>
                                           {{--  <div class="">
                                                <img class="img-fluid float-right" src="{{ asset('images/card.png') }}">
                                            </div> --}}
                                            <div class="p-3 m-3 border" id="paypal-button-container"></div>
                                        </div>  

                                        <div id="2checkout" class="d-none box box-primary bg-light border mt-2">
                                            <h4 class="bg-warning text-center">2Checkout</h4>
                                            <div class="">
                                                <img class="img-fluid float-right" src="{{ asset('images/card.png') }}">
                                            </div>

                                            <form id="myCCForm" action="{{ route('payment_pay_2checkout') }}" method="post">
                                                @csrf
                                                <input id="token" name="token" type="hidden" value="">
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <input type="hidden" name="totalAmount" value="{{$totalAmount + 100}}">
                                                <div class="box-body pt-5 pb-4 pr-4 pl-4">
                                                    <div class="form-group">
                                                        <label class='control-label'>Card holder Name</label>
                                                        <input class='_form-control  w-100' size='4' type='text' name="card_holder_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class='control-label'>Card Number</label>
                                                        <input autocomplete='off' id="ccNo" name="ccNo" class='_form-control card-number' size='20' type='text'>
                                                    </div>
                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                            <label class='control-label'>CVC</label>
                                                            <input autocomplete='off' id="cvv" name="cvv" class='_form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Month</label>
                                                            <input class='_form-control card-expiry-month' id="expMonth" name="expMonth" placeholder='MM' size='2' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Year</label>
                                                            <input class='_form-control card-expiry-year' id="expYear" name="expYear" placeholder='YYYY' size='4' type='text'>
                                                        </div>
                                                    </div>
                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-warning btn-block">Pay Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div id="payment_cash_in" class="d-none">
                                            <form role="form" action="{{ route('payment_pay_cash_in') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <input type="hidden" name="totalAmount" value="{{$totalAmount + 100}}">
                                                <input type="hidden" name="payment_method" value="cash_in_delivery">


                                                <div class="alert alert-success mt-2 mb-2 text-center">
                                                    <div class="text-center alert-warning">
                                                        <p style="font-size: 11px;">[N.B Shipping Cost is Dhaka 100 Tk]</p>
                                                    </div>
                                                </div>
                                                <div class="order_button">
                                                    <button type="submit">Order Confirmed</button>
                                                </div>
                                             </form>
                                        </div>

                                        <div id="payment_bkash" class="d-none">
                                            <form role="form" action="{{ route('payment_pay_cash_in') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <input type="hidden" name="totalAmount" value="{{$totalAmount + 100}}">
                                                <input type="hidden" name="payment_method" value="bkash">


                                                <div class="alert alert-success mt-2 text-center">
                                                    <h3>Payment</h3>
                                                    <p>
                                                        <strong>payment_bkash</strong>
                                                        <br>
                                                        <strong>Account Type: Agent</strong><br>
                                                        <strong>Bkash Number: 01983783387 Personal</strong>
                                                    </p>
                                                    <div class="alert alert-success">
                                                        Please send the above money to this Bkash Number and write your transaction code below there..
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center alert-warning">
                                                            <p style="font-size: 11px;">[N.B Shipping Cost is Dhaka 100 Tk]</p>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="transaction_id" class="form-control  bg-white mt-2" placeholder="Enter transaction code">
                                                </div>

                                                <div class="order_button">
                                                    <button type="submit">Order Confirmed</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div id="payment_rocket" class="d-none">
                                            <form role="form" action="{{ route('payment_pay_cash_in') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                                <input type="hidden" name="totalAmount" value="{{$totalAmount + 100}}">
                                                <input type="hidden" name="payment_method" value="rocket">

                                                <div class="alert alert-success mt-2 text-center">
                                                    <h3>Payment</h3>
                                                    <p>
                                                        <strong>payment_rocket</strong>
                                                        <br>
                                                        <strong>Account Type: agent</strong><br>
                                                        <strong>Bkash Number: 01983783387 Personal</strong>
                                                    </p>
                                                    <div class="alert alert-success">
                                                        Please send the above money to this Bkash Number and write your transaction code below there..
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center alert-warning">
                                                            <p style="font-size: 11px;">[N.B Shipping Cost is Dhaka 100 Tk]</p>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="transaction_id" class="form-control bg-white mt-2" placeholder="Enter transaction code">
                                                </div>
                                                <div class="order_button">
                                                    <button type="submit">Order Confirmed</button>
                                                </div>
                                            </form>
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

</script>


<script src="https://www.paypal.com/sdk/js?client-id=ASQt_1BoaUsbC8yy8yGDZ3M2D70Bt3eoBO5Mq7LijI0ISR-eYBp1GPe5xhtC7fWtfpakoB_jvAN60_W2&currency=USD"></script>
    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                // Set up the transaction

                return actions.order.create({

                    purchase_units: [{
                        amount: {
                            value: '500',
                            currency: 'USD'
                        }
                    }],

                });
            },
            onApprove: function(data, actions) {

                // Capture the funds from the transaction
                return actions.order.capture().then(function(details) {
                    // Show a success message to your buyer
                    var paperID = '12457893';
                    $.ajax({
                        url: "gggggg",
                        method: "POST",
                        dataType: "JSON",
                        data: {cdetails:details, paper_id: paperID, _token: '{{csrf_token()}}'},
                        success: function (res) {
                            console.log(res);
                            Swal.fire('Transaction completed by ' + details.payer.name.given_name + '! Please check your mail');
                            window.setTimeout(function () {
                                window.location = 'ssssssssssss';
                            }, 3000);
                        }
                    });
                });
            }
        }).render('#paypal-button-container');
    </script>

<script src="https://www.2checkout.com/checkout/api/2co.min.js"></script>

  <script>
    // Called when token created successfully.
    var successCallback = function(data) {
      var myForm = document.getElementById('myCCForm');
      myForm.token.value = data.response.token.token;
      // prompt("Copy token to clipboard: Ctrl+C, Enter", data.response.token.token);

      myForm.submit();
    };
    
    // Called when token creation fails.
    var errorCallback = function(data) {
      // Retry the token request if ajax call fails
      if (data.errorCode === 200) {
        tokenRequest();
      } else {
        alert(data.errorMsg);
      }
    };

    var tokenRequest = function() {
      // Setup token request arguments
      var args = {
        sellerId: "901418658",
        publishableKey: "CEDC31B6-4958-47F7-B871-1A0EF0A290C0",
        ccNo: $("#ccNo").val(),
        cvv: $("#cvv").val(),
        expMonth: $("#expMonth").val(),
        expYear: $("#expYear").val()
      };

      // Make the token request
      TCO.requestToken(successCallback, errorCallback, args);
    };

    $(function() {
      // Pull in the public encryption key for our environment
      TCO.loadPubKey('sandbox');

      $("#myCCForm").submit(function(e) {
        // Call our token request function
        tokenRequest();

        // Prevent form from submitting
        return false;
      });
    });
  </script>

<script type="text/javascript">

    $("#payments").change(function(){
        $payment_method = $("#payments").val();
        if ($payment_method == "stripe") {
            console.log('stripe');
            $("#payment_stripe").removeClass('d-none');
            $("#2checkout").addClass('d-none')
            $("#payment_cash_in").addClass('d-none')
            $("#payment_paypal").addClass('d-none')
            $("#payment_bkash").addClass('d-none')
            $("#payment_rocket").addClass('d-none')

        }else if($payment_method == "paypal") {
            console.log('paypal');
            $("#payment_paypal").removeClass('d-none');
            $("#2checkout").addClass('d-none');
            $("#payment_cash_in").addClass('d-none');
            $("#payment_stripe").addClass('d-none');
            $("#payment_bkash").addClass('d-none');
            $("#payment_rocket").addClass('d-none');

        }else if($payment_method == "2checkout") {
            console.log('cash_in');
            $("#2checkout").removeClass('d-none');
            $("#payment_cash_in").addClass('d-none');
            $("#payment_paypal").addClass('d-none');
            $("#payment_stripe").addClass('d-none');
            $("#payment_bkash").addClass('d-none');
            $("#payment_rocket").addClass('d-none');

        }else if($payment_method == "cash_in") {
            console.log('cash_in');
            $("#payment_cash_in").removeClass('d-none');
            $("#2checkout").addClass('d-none');
            $("#payment_stripe").addClass('d-none');
            $("#payment_paypal").addClass('d-none');
            $("#payment_bkash").addClass('d-none');
            $("#payment_rocket").addClass('d-none');

        }else if($payment_method == "bkash") {
            console.log('bkash');
            $("#payment_bkash").removeClass('d-none');
            $("#payment_stripe").addClass('d-none');
            $("#payment_paypal").addClass('d-none');
            $("#2checkout").addClass('d-none');
            $("#payment_cash_in").addClass('d-none');
            $("#payment_rocket").addClass('d-none');

        }else if($payment_method == "rocket") {
            console.log('rocket');
            $("#payment_rocket").removeClass('d-none');
            $("#payment_stripe").addClass('d-none');
            $("#payment_paypal").addClass('d-none');
            $("#2checkout").addClass('d-none');
            $("#payment_bkash").addClass('d-none');
            $("#payment_cash_in").addClass('d-none');
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
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endpush
