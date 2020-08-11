@extends('frontend/layouts/master')
@section('title','Product')

<style type="text/css" media="screen">
    .clearfix {
        clear: both;
    }
    .text-center {
        text-align: center;
    }
    a {
        color: tomato;
        text-decoration: none;
    }
    a:hover {
        color: #2196f3;
    }
    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #333;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #F5F5F5;
        border: 1px solid #CCC;
        border-radius: 4px;
    }
    .header {
        padding: 20px 0;
        position: relative;
        margin-bottom: 10px;
    }
    .header:after {
        content: "";
        display: block;
        height: 1px;
        background: #eee;
        position: absolute;
        left: 30%;
        right: 30%;
    }
    .header h2 {
        font-size: 3em;
        font-weight: 300;
        margin-bottom: 0.2em;
    }
    .header p {
        font-size: 14px;
    }
    #a-footer {
        margin: 20px 0;
    }
    .new-react-version {
        padding: 20px 20px;
        border: 1px solid #eee;
        border-radius: 20px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.1);
        text-align: center;
        font-size: 14px;
        line-height: 1.7;
    }
    .new-react-version .react-svg-logo {
        text-align: center;
        max-width: 60px;
        margin: 20px auto;
        margin-top: 0;
    }
    .success-box {
        margin: 50px 0;
        padding: 10px 10px;
        border: 1px solid #eee;
        background: #f9f9f9;
    }
    .success-box img {
        margin-right: 10px;
        display: inline-block;
        vertical-align: top;
    }
    .success-box>div {
        vertical-align: top;
        display: inline-block;
        color: #888;
    }
    /* Rating Star Widgets Style */
    .rating-stars ul {
        list-style-type: none;
        padding: 0;
        -moz-user-select: none;
        -webkit-user-select: none;
    }
    .rating-stars ul>li.star {
        display: inline-block;
    }
    /* Idle State of the stars */
    .rating-stars ul>li.star>i.fa {
        font-size: 2.5em;
        /* Change the size of the stars */
        color: #ccc;
        /* Color on idle state */
    }
    /* Hover state of the stars */
    .rating-stars ul>li.star.hover>i.fa {
        color: #FFCC36;
    }
    /* Selected state of the stars */
    .rating-stars ul>li.star.selected>i.fa {
        color: #FF912C;
    }
</style>

@section('content')
    @include('frontend/partials/content_top')
    <!--product details start-->
    <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="product_d_tab fix">
                        <div class="product_d_tab_button">
                            <ul class="nav product_navactive" role="tablist">
                                @foreach($productImage as $image)
                                    <li >
                                        <a class="nav-link" data-toggle="tab" href="#p_d_tab{{ $loop->index }}" role="tab" aria-controls="{{ $loop->index }}" aria-selected="false"><img src="{{ asset('images/product_image/'.$image->image) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content product_d_content">

                            @foreach($productImage as $image)
                                <div class="tab-pane fade show {{ $loop->index == 0? 'active':'' }}" id="p_d_tab{{ $loop->index }}" role="tabpanel" >
                                    <div class="modal_tab_img">
                                        <a href="#"><img src="{{ asset('images/product_image/'.$image->image) }}" alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="view_img">
                                            <a class="view_large_img" href="{{ asset('images/product_image/'.$image->image) }}">View larger <i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product_d_right">
                        <h4>{{ $product->title }}</h4>
                        <div class="samll_product_ratting mb-10">
                            <ul>
                                <li class="comment_form mr-2">Product Review:</li>
                                @php
                                    $count = 0;
                                @endphp

                                @if(count($product_reviews) > 0)
                                    @foreach($product_reviews as $product_review)
                                        @php
                                           $count +=  $product_review->rating;
                                        @endphp
                                    @endforeach
                                    @php
                                        $reviews = $count / count($product_reviews);
                                        for ($i = 0; $i < $reviews; $i++){
                                            @endphp
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            @php
                                        }
                                    @endphp
                                @else
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="product_condition">
                            <p>Condition:  <span>New product</span></p>
                        </div>

                        <div class="small_product_price mb-15">
                            <span class="new_price"> {{ $product->price }} Tk</span>
                            <span class="old_price">  {{ $product->old_price }} Tk </span>
                        </div>
                        <div class="product_d_quantity mt-5 mb-20">
                            <form class="" action="{{ route('card.store') }}" method="post">
                                @csrf
                                <label>Quantity</label>
                                <input min="1"  value="1" name="product_quantity" type="number">
                                <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                <button  type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </form>
                        </div>
                        <div class="product_in_stock mb-20">
                            <p>{{$product->quantity}} items</p>
                            <span> In stock </span>
                        </div>
                        <!-- <div class="product_d_social mb-40">
                            <ul>
                                <li><a href="#"> <i class="fa fa-twitter"></i> Tweet </a></li>
                                <li><a href="#"> <i class="fa fa-facebook-f"></i>  Share  </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i>Google+ </a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product details tab-->
    <div class="product__details_tab mb-40">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="product_details_tab_inner">
                        <div class="product_details_tab_button">
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="nav-link active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">More info</a>
                                </li>
                                <li>
                                    <a class="nav-link button_three" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content product_details_content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_d_tab_content">
                                    {!! $product->description !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="product_review_form pt-2">
                                    <h2>Add a review </h2>
                                    <p>Your email address will not be published. Required fields are marked </p>

                                    <div class="samll_product_ratting review_rating">
                                        <span>Your rating</span>
                                        <div class='rating-stars'>
                                            <ul id='stars'>
                                                <li class='star' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <input id="rating"  type="hidden">
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="review_form_comment_">
                                                <label for="review">Your review </label>
                                                <textarea cols="" rows="2" id="review" class="bg-transparent border" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="review_form_author">
                                                <label for="name">Name</label>
                                                <input id="name"  type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="review_form_author">
                                                <label for="email">Email </label>
                                                <input id="email"  type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ $product->id }}" id="product_id" >
                                    <button onclick="product_review_post()" type="submit">Submit</button>
                                </div>

                                <div class="container">
                                    <div class="row">
                                    @foreach($product_reviews as $product_review)
                                        <div class="col-md-6 card bg-light pt-4">
                                            <div class="product_d_tab_content_inner">
                                                <div class="product_d_tab_content_item">
                                                    <div class="samll_product_ratting">
                                                        <ul>
                                                            <li><strong>Rating :</strong> </li>
                                                            <?php
                                                                for ($i = 0; $i < $product_review->rating; $i++){
                                                                    ?>
                                                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <?php
                                                                }
                                                            ?>                                                           
                                                        </ul>
                                                    </div>
                                                    <strong>Name : {{ $product_review->name  }}</strong>
                                                    <p><strong>Date : {{ $product_review->created_at->format('d-M-Y') }}</strong> </p>
                                                    <p> <strong> Review :</strong></p>
                                                    <p>{!! $product_review->review !!}</p> 
                                                </div>                                        
                                            </div>
                                        </div>
                                    @endforeach
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
