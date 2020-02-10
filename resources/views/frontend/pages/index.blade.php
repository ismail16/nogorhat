@extends('frontend/layouts/master')
@section('title','Home')

@section('content')
<div class="home_two_block_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="banner_slider mb-10">
                    <div class="slider_active owl-carousel">
                        @foreach($sliders as $slider)
                        <div class="single_slider single_sl_two">
                            <img src="{{ asset('images/slider_image/'.$slider->image)}}" class="single_slider_image" alt="">
                            <div class="row">
                                <div class="col-md-12 p-4">
                                    <div class="slider_content slider_c_two text-{{ $slider->text_position }}">
                                        <h2> {!! $slider->slider_text !!}</h2>
                                        <div class="slider_button">
                                            <a href="{{ $slider->button_link }}"> {{ $slider->button_text }} </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single_shipping">
                            <div class="shippin_icone">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="shipping_content">
                                <h3>Free shipping on orders over $100</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_shipping">
                            <div class="shippin_icone">
                                <i class="fa fa-history"></i>
                            </div>
                            <div class="shipping_content">
                                <h3>30-day returns money back guarantee</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_shipping box3">
                            <div class="shippin_icone">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="shipping_content">
                                <h3>24/7 online support consultations</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="top_sellers">
                    <div class="top_title">
                        <h2> Top sellers</h2>
                    </div>
                    <div class="small_product_active owl-carousel">
                        <div class="small_product_item">
                            <?php  $order_no = 0;
                                foreach($orders as $order){
                                        $product = \App\Models\Product::where('id',$order->order_detail->product_id)->first();
                                    if( $order_no < 5){
                                        ?>
                                        <div class="small_product">
                                            <div class="small_product_thumb">
                                                <a href="{{ route('single.producs',$product->slug) }}">
                                                <img src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" class="w-100" alt="">
                                                </a>
                                                <div class="product_discount">
                                                    <span>-10%</span>
                                                </div>
                                            </div>
                                            <div class="small_product_content">
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li>Rating : </li>
                                                        @php
                                                            $product_reviews = \App\Models\ProductReview::where('product_id',$product->id)->get();
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
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.producs',$product->slug) }}">
                                                        {{ $product->title }}
                                                    </a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> {{ $product->price }} </span>
                                                    <span class="old_price">  {{ $product->old_price }}  </span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    $order_no++;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach( \App\Models\Category::all() as $category)
            <div class="col-lg-12 col-md-12">
                <div class="featured_area featured_three mb-40">
                    <div class="top_title title_three">
                        <h2> shop by {{ $category->name }}</h2>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-2 col-md-6">
                            <div class="hot_category hot_ct_three">
                                <ul class="hot_category_ul">
                                    @foreach( \App\Models\Subcategory::Where('category_id', $category->id)->get() as $subcategory)
                                        <li class="hot_category_li">
                                            <a class="border-bottom" href="{{ route('sub_category', [$category->slug, $subcategory->slug] ) }}">{{ $subcategory->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <img src="{{asset('images/category_image/'.$category->image)}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <div class="featured_left fetured_l_three">
                                <div class="featured_produt featured_product_three">
                                    <div class="featured_active_three owl-carousel">
                                        @foreach( \App\Models\Product::Where('category_id', $category->id)->get() as $product)
                                            <div class="single_featured ">
                                                <div class="single_product s_product_three card mr-2">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.producs',$product->slug) }}">
                                                            <img src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" class="product_image img-fluid" alt=""></a>
                                                        <div class="product_discount">
                                                            <span>New</span>
                                                        </div>
                                                    </div>

                                                    <div class="product_content p_content_three">
                                                        <div class="samll_product_ratting">
                                                            <ul>
                                                                <li>Rating : </li>
                                                                @php
                                                                    $product_reviews = \App\Models\ProductReview::where('product_id',$product->id)->get();
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
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.producs',$product->slug) }}">{{ $product->title }}</a>
                                                        </div>
                                                        <div class="small_product_price s_price_three">
                                                            <span class="new_price"> Tk {{ $product->price }} </span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer p-1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="{{ route('single.producs',$product->slug) }}" class="btn btn-outline-primary btn-block m-1"><i class="fa fa-eye"></i> View</a>
                                                            </div>
                                                            <div class="col-md-6 text-right">
                                                                <form class="" action="{{ route('card.store') }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                                                    <button class="btn btn-outline-primary m-1 btn-block w-100"><i class="fa fa-shopping-cart"></i> ADD</button>
                                                                </form>
                                                            </div>
                                                        </div>
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
            @endforeach
        </div>
@endsection
