@extends('frontend/layouts/master')
@section('title','Order Confirmation')

@section('content')
    <div class="container" id="printarea">
        <div class="row">

            <div class="col-12" style="padding: 0px 50px">
               <div class="card m-3">
                   @if(session()->has('message'))
                       <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                           <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                               {{session('message')}}
                           </div>
                       </div>
                   @endif
                   <div class="card-body">
                       <div class="row-fluid">
                           <div class="span12 text-center">
                               <div class="columns-container">
                                   <h4 align="center" style="color: green;">Thank You !!<br> Your Order Successfully Placed.<br>We will contact with you shortly </h4>
                               </div>
                               <h3 class="text-center">Collect Your Invoice</h3>
                               <a href="{{ route('card.invoice',$order_id) }}" target="_blank" class="btn btn-primary btn-sm text-white"><i class="fa fa-download"></i> Download</a>
                           </div>
                       </div><br>
                       <div class="d-flex justify-content-center">
                           <img src="http://lara-ecom54.ismail-hossain.com/public/frontend_assets/images/Handshake.jpeg" style="width:100%; max-width:400px;">
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection

