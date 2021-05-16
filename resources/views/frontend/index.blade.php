@extends('frontend.layouts.app')
@section('custom-css')
<!-- INCLUDE MAIN SCRIPT: -->
<script src='{{asset('try-on/release/JeelizNNCwidget.js')}}'></script>

<!-- For icons adjust fame or resize canvas -->
{{-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> --}}

<!-- Font for the header only: -->
{{-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> --}}

<!-- main stylesheet: -->
<link rel='stylesheet'
      href="{{asset('try-on/css/JeeWidget.css')}}" />

@endsection
@section('content')
 <!-- Home slider -->
<section class="p-0">
    <div class="slide-1 home-slider">
        <div>
            <div class="home text-left">
                <img src="../assets/images/home-banner/12.jpg"
                     alt=""
                     class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>furniture sofa</h4>
                                    <h1>harmony sofa</h1><a href="#"
                                       class="btn btn-solid">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="home text-left">
                <img src="../assets/images/home-banner/13.jpg"
                     alt=""
                     class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>furniture sofa</h4>
                                    <h1>harmony chair</h1><a href="#"
                                       class="btn btn-solid">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home slider end -->


   <!-- Tab product -->
    <div class="title1 section-t-space">
        <h4>exclusive products</h4>
        <h2 class="title-inner1">special products</h2>
    </div>
    <section class="section-b-space p-t-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class="no-slider row">
                                    @foreach ($products as $product)
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="{{route('frontend.product.show',$product->id)}}"><img src="{{asset($product->image)}}"
                                                    class="img-fluid blur-up lazyload bg-img"
                                                    alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal"
                                                    data-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                            title="Add to Wishlist"><i class="ti-heart"
                                                aria-hidden="true"></i></a> <a href="#"
                                            data-toggle="modal"
                                            data-target="#quick-view"
                                            title="Quick View"><i class="ti-search"
                                                aria-hidden="true"></i></a> <a href="compare.html"
                                            title="Compare"><i class="ti-reload"
                                                aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="{{route('frontend.product.show',$product->id)}}">
                                            <h6>{{$product->name}}</h6>
                                        </a>
                                        <h4>${{$product->price}} <del>${{$product->old_price}}</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
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
    </section>
    <!-- Tab product end -->


@endsection
