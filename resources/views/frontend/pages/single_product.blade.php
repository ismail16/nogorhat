@extends('frontend/layouts/master')
@section('title','Product')

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
                                        <a class="nav-link" data-toggle="tab" href="#p_d_tab{{ $loop->index }}" role="tab" aria-controls="{{ $loop->index }}" aria-selected="false"><img src="{{ asset('public/images/product_image/'.$image->image) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content product_d_content">

                            @foreach($productImage as $image)
                                <div class="tab-pane fade show {{ $loop->index == 0? 'active':'' }}" id="p_d_tab{{ $loop->index }}" role="tabpanel" >
                                    <div class="modal_tab_img">
                                        <a href="#"><img src="{{ asset('public/images/product_image/'.$image->image) }}" alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="view_img">
                                            <a class="view_large_img" href="{{ asset('public/images/product_image/'.$image->image) }}">View larger <i class="fa fa-search-plus"></i></a>
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
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form" href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <div class="product_condition">
                            <p>Condition:  <span>New product</span></p>
                        </div>

                        <div class="small_product_price mb-15">
                            <span class="new_price"> {{ $product->price }} Tk</span>
                            <span class="old_price">  {{ $product->old_price }} Tk </span>
                        </div>
                        <div class="product_d_quantity mb-20">
                            <form class="" action="{{ route('card.store') }}" method="post">
                                @csrf
                                <label>quantity</label>
                                <input min="1"  value="1" name="product_quantity" type="number">
                                <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                <button  type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </form>
                        </div>
                        <div class="product_in_stock mb-20">
                            <p>{{$product->quantity}} items</p>
                            <span> In stock </span>
                        </div>
                        <div class="product_d_social mb-40">
                            <ul>
                                <li><a href="#"> <i class="fa fa-twitter"></i> Tweet </a></li>
                                <li><a href="#"> <i class="fa fa-facebook-f"></i>  Share  </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i>Google+ </a></li>
                            </ul>
                        </div>
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
{{--                                <li>--}}
{{--                                    <a class="nav-link" data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Data sheet</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="nav-link button_three" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                        <div class="tab-content product_details_content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_d_tab_content">
                                    {!! $product->description !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="first_child">Compositions</td>
                                            <td>Polyester</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Properties</td>
                                            <td>Short Dress</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="product_d_tab_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="product_d_tab_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                                <div class="product_d_tab_content_inner">
                                    <div class="product_d_tab_content_item">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li>Grade </li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a class="comment_form" href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <strong>Posthemes</strong>
                                        <p>09/07/2018</p>
                                    </div>
                                    <div class="product_d_tab_content_item">
                                        <strong>demo</strong>
                                        <p>That's OK!</p>
                                    </div>
                                </div>
                                <div class="product_review_form">
                                    <form action="#">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                        <div class="samll_product_ratting review_rating">
                                            <span>Your rating</span>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="review_form_comment">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="review_form_author">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="review_form_author">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--product details tab end-->
@endsection
