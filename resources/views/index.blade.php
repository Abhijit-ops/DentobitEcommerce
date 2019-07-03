@extends('layouts.main')


@section('contents')
    {{--@include('Helper.Navbar')--}}
    <!-- slider-section - start
            ================================================== -->
    <section id="slider-section" class="slider-section clearfix">

        <!-- slider-item - start -->
        <div class="slider-item" style="background-image: url({{url('images/slider/dentatlslider.png')}});">
            <div class="overlay-white sec-ptb-60">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="slider-content">

                                <div class="mb-15">
                                    <h1 class="m-0">vr gear</h1>
                                    <h3 class="m-0">Capture life in high-definition</h3>
                                </div>

                                <div class="mb-30">
                                    <h4><strong class="color-pure-red">Save $160</strong> When you purchase </h4>
                                    <h2>Gear 360 Camera</h2>
                                    <h5 class="color-black">For $199.99</h5>
                                </div>

                                <a href="product-details.html" class="custom-btn bg-green">shop now</a>

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="slider-item-image">
                                <img src="{{asset('images/fresh_breath.png')}}" alt="image_not_found">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- slider-item - end -->


    </section>
    <!-- slider-section - end
    ================================================== -->
    {{--@foreach($products as $product)--}}
    {{--{{$product->name}}<br>--}}
    {{--@endforeach--}}



    <!-- police-section - start
================================================== -->
    <section id="police-section" class="police-section clearfix">
        <div class="container">

            <div class="police-service-list ul-li">
                <ul class="clearfix">

                    <li>
							<span class="icon bg-green">
								<i class="flaticon-delivery"></i>
							</span>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p class="m-0">
                                Free Shipping On Order above  1000৳ Inside Dhaka City
                            </p>
                        </div>
                    </li>

                    <li>
							<span class="icon bg-green">
								<i class="flaticon-money-bag"></i>
							</span>
                        <div class="content">
                            <h3>Product Replacement</h3>
                            <p class="m-0">
                                 Return it With 7 Days For an Exchange.
                            </p>

                        </div>
                    </li>

                    <li>
							<span class="icon bg-green">
								<i class="flaticon-support"></i>
							</span>
                        <div class="content">
                            <h3>Support 24/7</h3>
                            <p class="m-0">
                                Contact Us 24 Hours a Day 7 Days a Week
                            </p>
                        </div>
                    </li>

                    <li>
							<span class="icon bg-green">
								<i class="flaticon-pay"></i>
							</span>
                        <div class="content">
                            <h3>Payment Method</h3>
                            <p class="m-0">
                                We Ensure Secure Payment With Bkash
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>
    <!-- police-section - end
    ================================================== -->





    <!-- promotion-section - start
    ================================================== -->
    <div class="promotion-section clearfix">
        <div class="container">
            <div class="row">

                <!-- promotion-item - start -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="promotion-item">
                        <a href="product-details.html" class="promotion-img">
                            <img src="{{asset('images/promotion/digital/img-1.jpg')}}" alt="image_not_found">
                        </a>
                    </div>
                </div>
                <!-- promotion-item - end -->

                <!-- promotion-item - start -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="promotion-item">
                        <a href="product-details.html" class="promotion-img">
                            <img src="{{asset('images/promotion/digital/img-2.jpg')}}" alt="image_not_found">
                        </a>
                    </div>
                </div>
                <!-- promotion-item - end -->

            </div>
        </div>
    </div>
    <!-- promotion-section - end
    ================================================== -->





    <!-- featured-section - start
    ================================================== -->
    <div id="featured-section" class="featured-section sec-ptb-60 clearfix">

        <div class="featured-container mb-30">
            <div class="container">
                <ul class="nav digital-featured-nav">
                    <li><a class="active" data-toggle="tab" href="#featured">featured</a></li>
                    <li><a data-toggle="tab" href="#best-seller">Best Seller</a></li>
                    <li><a data-toggle="tab" href="#top-rated">New Arrival</a></li>
                </ul>
            </div>

            <div class="tab-content">
                <!-- tab-pane (featured) - start -->
                <div id="featured" class="tab-pane fade in active show">
                    <div class="container">
                        <div class="row">

                            @foreach($featuredProducts as $featuredProduct)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item">
                                    @if($featuredProduct->discount!=null)
                                    <div class="post-labels">
                                        <ul class="clearfix">
                                            <li class="bg-danger">{{$featuredProduct->discount}}</li>
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="image-container">
                                        <img src="{{$featuredProduct->image}}" alt="{{$featuredProduct->name}}">
                                        <a href="{{route('products.single',[$featuredProduct->id])}}" class="quick-view">
                                            <i class="fas fa-eye"></i>
                                            quick view
                                        </a>
                                    </div>
                                    <div class="item-content text-center">
                                        <a href="{{route('products.single',[$featuredProduct->id])}}" class="item-title">{{$featuredProduct->name}}</a>
                                        <div class="item-price">
                                            <strong class="color-black">${{$featuredProduct->price}}</strong>
                                            <del>${{($featuredProduct->price+$featuredProduct->price*(10/100))}}</del>
                                        </div>
                                    </div>
                                    <div class="hover-content">
                                        <div class="color-options ul-li-center mb-15">
                                            <ul>
                                                <li><a href="#!" class="color-1"></a></li>
                                                <li><a href="#!" class="color-2"></a></li>
                                                <li><a href="#!" class="color-3"></a></li>
                                            </ul>
                                        </div>
                                        @if($featuredProduct->checkStock!="Out Of Stock")
                                        <form>
                                            @csrf
                                            <input type="hidden" value="{{$featuredProduct->name}}" name="name" id="name_{{$featuredProduct->id}}">
                                            <input type="hidden" value="{{$featuredProduct->image}}" name="imgages" id="imgages_{{$featuredProduct->id}}">
                                            <input type="hidden" value="{{$featuredProduct->id}}" name="id" id="p_id_{{$featuredProduct->id}}">
                                            <input type="hidden" value="{{$featuredProduct->price}}" name="price" id="price_{{$featuredProduct->id}}">
                                            <input type="hidden" value="1" name="qty" id="qty_{{$featuredProduct->id}}">
                                            <button class="add-to-cart"  data-panel-id="{{$featuredProduct->id}}" onclick="storeToCart(this)"  type="button" >
                                                <i class="flaticon-shopper"></i>
                                                add to cart
                                            </button>
                                        </form>
                                        @else
                                            <button class="add-to-cart-danger" type="button" >
                                                <i class="flaticon-shopper"></i>
                                                Out Of Stock
                                            </button>
                                        @endif
                                        <div class="product-meta ul-li-center">
                                            <ul class="clearfix">
                                                <li><a href="#!"><i class="flaticon-heart"></i></a></li>
                                                <li><a href="#!"><i class="flaticon-libra"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach

                        </div>
                    </div>
                </div>
                <!-- tab-pane (featured) - end -->

                <!-- tab-pane (best-seller) - start -->
                <div id="best-seller" class="tab-pane fade">
                    <div class="container">
                        <div class="row">
                            @foreach($bestSellerProducts as $bestSeller)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item">
                                    <div class="post-labels">
                                        <ul class="clearfix">
                                            <li class="bg-success">best seller</li>
                                        </ul>
                                    </div>
                                    <div class="image-container">
                                        <img src="{{$bestSeller->image}}" alt="{{$bestSeller->name}}">
                                        <a href="{{route('products.single',[$bestSeller->id])}}" class="quick-view">
                                            <i class="fas fa-eye"></i>
                                             view
                                        </a>
                                    </div>
                                    <div class="item-content text-center">
                                        <a href="{{route('products.single',[$bestSeller->id])}}" class="item-title">{{$bestSeller->name}}</a>
                                        <div class="item-price">
                                            <strong class="color-black">${{$bestSeller->price}}</strong>
                                            <del>${{$bestSeller->price}}</del>
                                        </div>
                                    </div>
                                    <div class="hover-content">
                                        <div class="color-options ul-li-center mb-15">
                                            <ul>
                                                <li><a href="#!" class="color-1"></a></li>
                                                <li><a href="#!" class="color-2"></a></li>
                                                <li><a href="#!" class="color-3"></a></li>
                                            </ul>
                                        </div>
                                        @if($bestSeller->checkStock!="Out Of Stock")
                                        <form>
                                            @csrf
                                            <input type="hidden" value="{{$bestSeller->name}}" name="name" id="name_{{$bestSeller->id}}">
                                            <input type="hidden" value="{{$bestSeller->image}}" name="imgages" id="imgages_{{$bestSeller->id}}">
                                            <input type="hidden" value="{{$bestSeller->id}}" name="id" id="p_id_{{$bestSeller->id}}">
                                            <input type="hidden" value="{{$bestSeller->price}}" name="price" id="price_{{$bestSeller->id}}">
                                            <input type="hidden" value="1" name="qty" id="qty_{{$bestSeller->id}}">
                                            <button class="add-to-cart"  data-panel-id="{{$bestSeller->id}}" onclick="storeToCart(this)"  type="button" >
                                                <i class="flaticon-shopper"></i>
                                                add to cart
                                            </button>
                                        </form>
                                            @else
                                            <button class="add-to-cart-danger" type="button" >
                                                <i class="flaticon-shopper"></i>
                                               Out Of Stock
                                            </button>
                                        @endif
                                        <div class="product-meta ul-li-center">
                                            <ul class="clearfix">
                                                <li><a href="#!"><i class="flaticon-heart"></i></a></li>
                                                <li><a href="#!"><i class="flaticon-libra"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
                <!-- tab-pane (best-seller) - start -->

                <!-- tab-pane (top-rated) - start -->
                <div id="top-rated" class="tab-pane fade">
                    <div class="container">
                        <div class="row">
                            @foreach($newArrivalProducts as $item)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item">
                                    @if($item->discount!=null)
                                        <div class="post-labels">
                                            <ul class="clearfix">
                                                <li class="bg-danger">{{$featuredProduct->discount}}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="image-container">
                                        <img src="{{$item->image}}" alt="image_not_found">
                                        <a href="{{route('products.single',[$item->id])}}" class="quick-view">
                                            <i class="fas fa-eye"></i>
                                            quick view
                                        </a>
                                    </div>
                                    <div class="item-content text-center">
                                        <a href="{{route('products.single',[$item->id])}}" class="item-title">{{$item->name}}</a>
                                        <div class="item-price">
                                            <strong class="color-black">{{$item->price}}</strong>
                                            <del>{{$item->price}}</del>
                                        </div>
                                    </div>
                                    <div class="hover-content">
                                        <div class="color-options ul-li-center mb-15">
                                            <ul>
                                                <li><a href="#!" class="color-1"></a></li>
                                                <li><a href="#!" class="color-2"></a></li>
                                                <li><a href="#!" class="color-3"></a></li>
                                            </ul>
                                        </div>
                                        @if($item->checkStock!="Out Of Stock")
                                        <form>
                                            @csrf
                                            <input type="hidden" value="{{$item->name}}" name="name" id="name_{{$item->id}}">
                                            <input type="hidden" value="{{$item->image}}" name="imgages" id="imgages_{{$item->id}}">
                                            <input type="hidden" value="{{$item->id}}" name="id" id="p_id_{{$item->id}}">
                                            <input type="hidden" value="{{$item->price}}" name="price" id="price_{{$item->id}}">
                                            <input type="hidden" value="1" name="qty" id="qty_{{$item->id}}">
                                            <button class="add-to-cart"  data-panel-id="{{$item->id}}" onclick="storeToCart(this)"  type="button" >
                                                <i class="flaticon-shopper"></i>
                                                add to cart
                                            </button>
                                        </form>
                                        @else
                                            <button class="add-to-cart-danger" type="button" >
                                                <i class="flaticon-shopper"></i>
                                                Out Of Stock
                                            </button>
                                        @endif
                                        <div class="product-meta ul-li-center">
                                            <ul class="clearfix">
                                                <li><a href="#!"><i class="flaticon-heart"></i></a></li>
                                                <li><a href="#!"><i class="flaticon-libra"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                @endforeach
                        </div>
                    </div>
                </div>
                <!-- tab-pane (top-rated) - start -->
            </div>
        </div>

        <div class="promotion-banner">
            <div class="container">
                <div class="row">

                    <!-- promotion-item - start -->
                    <div class="col-lg-4">
                        <div class="promotion-item">
                            <a href="product-details.html" class="promotion-img">
                                <img src="{{asset('images/promotion/digital/img-3.jpg')}}" alt="image_not_found">
                            </a>
                        </div>
                    </div>
                    <!-- promotion-item - end -->

                    <!-- deal-item - start -->
                    <div class="col-lg-4">
                        <div class="deal-item text-center">
								<span class="deal-label">
									<img src="{{asset('images/deal-label.png')}}" alt="image_not_found">
								</span>
                            <div class="image-container clearfix">
                                <img src="{{asset('images/deals/digital/img-1.jpg')}}" alt="image_not_found">
                                <div class="countdown-timer">
                                    <ul class="countdown-list" data-countdown="2019/01/01"></ul>
                                </div>
                            </div>
                            <div class="item-content">

                                <div class="rateing-star">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span><i>(05 review)</i></span>
                                </div>

                                <a href="#!" class="item-title">
                                    Samsung Gear 360 4K Spherical VR Camera (2018 Version)
                                </a>
                                <div class="item-price mb-15">
                                    <strong class="color-black">$129.00</strong>
                                    <del>$359.00</del>
                                </div>
                                <div class="sold-available clearfix">
                                    <span class="float-left">Available: 8</span>
                                    <span class="float-right">Already Sold: 20</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- deal-item - end -->

                    <!-- promotion-item - start -->
                    <div class="col-lg-4">
                        <div class="promotion-item">
                            <a href="product-details.html" class="promotion-img">
                                <img src="{{asset('images/promotion/digital/img-4.jpg')}}" alt="image_not_found">
                            </a>
                        </div>
                    </div>
                    <!-- promotion-item - end -->

                </div>
            </div>
        </div>

    </div>
    <!-- featured-section - end
    ================================================== -->





    <!-- promotion-banner-section - start
    ================================================== -->
    <section id="promotion-banner-section" class="promotion-banner-section clearfix">
        <img src="{{asset('images/promotion/digital/big-banner-1.jpg')}}" alt="image_not_found">
        <div class="digital-banner-content">

            <div class="item-details">
                <a href="#!" class="read-more"></a>
                <div class="details-bar">
                    <div class="image-container mb-15">
                        <img src="{{asset('images/promotion/img-2.jpg')}}" alt="image_not_found">
                        <a href="#!" class="quick-view">
                            <i class="fas fa-eye"></i>
                            quick view
                        </a>
                    </div>
                    <a href="#!" class="item-title mb-15">
                        UHD Curved TV 78" 4K
                    </a>
                    <div class="item-price mb-15">
                        <strong class="color-black">$129.00</strong>
                        <del>$359.00</del>
                    </div>
                    <div class="color-options ul-li-center mb-15">
                        <ul>
                            <li><a href="#!" class="color-1"></a></li>
                            <li><a href="#!" class="color-2"></a></li>
                            <li><a href="#!" class="color-3"></a></li>
                        </ul>
                    </div>
                    <a href="#!" class="custom-btn bg-royal-blue">
                        <i class="flaticon-shopping-basket"></i>
                        add to cart
                    </a>
                </div>
            </div>

            <div class="item-details-2">
                <a href="#!" class="read-more"></a>
                <div class="details-bar">
                    <div class="image-container mb-15">
                        <img src="{{asset('images/promotion/img-3.jpg')}}" alt="image_not_found">
                        <a href="#!" class="quick-view">
                            <i class="fas fa-eye"></i>
                            quick view
                        </a>
                    </div>
                    <a href="#!" class="item-title mb-15">
                        UHD Curved TV 78" 4K
                    </a>
                    <div class="item-price mb-15">
                        <strong class="color-black">$129.00</strong>
                        <del>$359.00</del>
                    </div>
                    <div class="color-options ul-li-center mb-15">
                        <ul>
                            <li><a href="#!" class="color-1"></a></li>
                            <li><a href="#!" class="color-2"></a></li>
                            <li><a href="#!" class="color-3"></a></li>
                        </ul>
                    </div>
                    <a href="#!" class="custom-btn bg-royal-blue">
                        <i class="flaticon-shopping-basket"></i>
                        add to cart
                    </a>
                </div>
            </div>

            <div class="main-content">
                <span>Curved HD TV</span>
                <h2><strong>The Features you walt,</strong>All in one place</h2>
                <p class="mb-15">
                    The curved display has a curvature level equivalent to that of a circle,
                    tracks the rounded shape os the eyes better
                </p>
                <a href="product-details.html" class="custom-btn bg-royal-blue">shop now</a>
            </div>

        </div>
    </section>
    <!-- promotion-banner-section - end
    ================================================== -->









    </div>
    <!-- promotion-section - end
    ================================================== -->








    <!-- category-section - start
    ================================================== -->
    <section id="category-section" class="category-section sec-ptb-60 clearfix">
        <div class="container">

            <!-- section-title - start -->
            <div class="section-title mb-0">
                <h2>Top Brands</h2>
            </div>
            <!-- section-title - end -->

            <div class="digital-category-post">
                <div class="row">
                @foreach($topBrands as $topBrand)
                    <!-- post-item - start -->
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="post-item">
                                <a href="{{route('productBy.brandName',[$topBrand->name])}}" class="item-img">
                                    <img src="{{asset('images/top-category/digital/img-1.jpg')}}" alt="image_not_found">
                                </a>
                                <span class="post-item-title">{{$topBrand->name}}</span>
                            </div>
                        </div>
                        <!-- post-item - end -->
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- category-section - end
    ================================================== -->



@stop