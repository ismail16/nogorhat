
@extends('author/layouts/dashboard')
@section('title','Author dashboard')

@section('author-content')
<div class="col-sm-10 col-sm-offset-1 card">
    <h4 class="text-center p-3">Welcome To Customer Dashboard</h4>
    <div class="row p-3 border">
       <!--  <div class="col-md-3">
            <div class="card border-warning mx-sm-1 p-3">
                <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                <div class="text-warning text-center mt-3"><h4>Inbox</h4></div>
                <div class="text-warning text-center mt-2"><h1>346</h1></div>
            </div>
        </div> -->
        <div class="col-md-6">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card" >
                    <span class="fa fa-cart-plus" aria-hidden="true"></span>
                </div>
                <div class="text-info text-center mt-3"><h4>Orders</h4></div>
                <div class="text-info text-center mt-2"><h1>{{ count($orders) }}</h1></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card">
                    <span class="fa fa-money" aria-hidden="true"></span>
                </div>
                <div class="text-success text-center mt-3"><h4>Payments</h4></div>
                <div class="text-success text-center mt-2"><h1>{{ count($payments) }}</h1></div>
            </div>
        </div>
        <!-- <div class="col-md-3">
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Hearts</h4></div>
                <div class="text-danger text-center mt-2"><h1>346</h1></div>
            </div>
        </div> -->
    </div>
</div>

@endsection
