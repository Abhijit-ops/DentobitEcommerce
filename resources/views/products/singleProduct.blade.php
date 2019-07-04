@extends('layouts.main')



@section('contents')
    <!-- breadcrumb-section - start
		================================================== -->
    <section id="breadcrumb-section" class="breadcrumb-section clearfix">

        <!-- breadcrumb-big-title - start -->
        <div class="breadcrumb-big-title" style="background-image: url({{url('images/breadcrumb/bg-image-1.jpg')}});">
            <div class="overlay-black sec-ptb-100">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h2 class="title-text">product details</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-big-title - end -->

        <!-- breadcrumb-list - start -->
        <div class="breadcrumb-list">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">product details</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb-list - end -->

    </section>
    <!-- breadcrumb-section - end
    ================================================== -->





    <!-- product-details-section - start
    ================================================== -->
    <section id="product-details-section" class="product-details-section sec-ptb-60 clearfix">
        <div class="container">

            <!-- product-details - start -->
            <div class="product-details mb-60">
                <div class="row justify-content-md-center">

                    <!-- product-details-carousel - start -->
                    <div class="col-lg-6 col-md-10 col-sm-12">
                        <div class="product-details-carousel">
                            <div class="slider-for">
                                @foreach($product->galleryImage as $galleryImage)
                                <div class="item">
                                    <img src="{{env('App_External_Image_url')}}{{$galleryImage->gallery_image}}" alt="image_not_found">
                                </div>
                                    @endforeach
                            </div>

                            <div class="slider-nav">
                                @foreach($product->galleryImage as $galleryImage)
                                <div class="item">
                                    <img src="{{env('App_External_Image_url')}}{{$galleryImage->gallery_image}}" alt="image_not_found">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- product-details-carousel - end -->

                    <!-- product-details-content - start -->
                    <div class="col-lg-6 col-md-10 col-sm-12">
                        <div class="product-details-content">

                            <div class="product-code ul-li mb-30">
                                <ul class="clearfix">
                                    <li>SKU: {{$product->sku}}</li>

                                </ul>
                            </div>
                            <div class="product-title mb-30">
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
                                <h2>{{$product->name}}</h2>
                                <h3>${{$product->price}}</h3>
                            </div>
                            <p class="mb-30">
                                {!! $product->description !!}
                            </p>
                            <div class="product-size ul-li mb-30">
                                <h3 class="list-title">size:</h3>
                                <ul class="clearfix">
                                    <li><a href="#!">xs</a></li>
                                    <li><a href="#!">s</a></li>
                                    <li><a class="active" href="#!">m</a></li>
                                    <li><a href="#!">l</a></li>
                                    <li><a href="#!">xl</a></li>
                                </ul>
                            </div>
                            <div class="product-color ul-li mb-30">
                                <h3 class="list-title">color:</h3>
                                <form action="#">
                                    <ul class="clearfix">
                                        <li><a href="#!" class="color-1"></a></li>
                                        <li><a href="#!" class="color-2"></a></li>
                                        <li><a href="#!" class="color-3"></a></li>
                                        <li><a href="#!" class="color-4"></a></li>
                                    </ul>
                                </form>
                            </div>
                            <div class="product-quantity mb-30">
                                <h3 class="list-title">qty:</h3>
                                <form action="#">
                                    <input type="number" name="qty" id="qty_{{$product->id}}" placeholder="quantity" value="1">
                                </form>
                            </div>
                            <div class="item-btns-group ul-li clearfix mb-30">
                                <ul class="clearfix">
                                    <li>
                                        @if($product->checkStock!="Out Of Stock")
                                        <form>
                                            @csrf
                                            <input type="hidden" value="{{$product->name}}" name="name" id="name_{{$product->id}}">
                                            <input type="hidden" value="{{$product->image}}" name="imgages" id="imgages_{{$product->id}}">
                                            <input type="hidden" value="{{$product->id}}" name="id" id="p_id_{{$product->id}}">
                                            <input type="hidden" value="{{$product->price}}" name="price" id="price_{{$product->id}}">
                                            {{--<input type="hidden"  name="qty" id="qty_{{$product->id}}" value="1">--}}
                                            <button class="add-to-cart" style="padding: 10px 30px"  data-panel-id="{{$product->id}}" onclick="storeToCart(this)"  type="button" >
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

                                    </li>
                                    <li><a href="#!"><i class="flaticon-heart"></i></a></li>
                                    <li><a href="#!"><i class="flaticon-libra"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-share-links ul-li">
                                <ul class="clearfix">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- product-details-content - end -->

                </div>
            </div>
            <!-- product-details - end -->

            <!-- product-details-tab - start -->
            <div class="product-details-tab">
                <div class="tab-menu ul-li-center mb-30">
                    <ul class="nav">
                        <li><a class="active" data-toggle="tab" href="#descriptions">descriptions</a></li>
                        <li><a data-toggle="tab" href="#informations">informations</a></li>
                        <li><a data-toggle="tab" href="#reviews">reviews<sup>(3)</sup></a></li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div id="descriptions" class="tab-pane fade in active show">
                        <p class="mb-15">
                            {!! $product->description !!}
                        </p>

                    </div>
                    <div id="informations" class="tab-pane fade">
                        <p class="mb-15">
                            Quisque quis ipsum venenatis, fermentum ante volutpat, ornare enim. Phasellus molestie risus non aliquet cursus. Integer vestibulum mi lorem, id hendrerit ante lobortis non. Nunc ante ante, lobortis non pretium non, vulputate vel nisi. Maecenas dolor elit, fringilla nec turpis ac, auctor vulputate nulla. Phasellus sed laoreet velit.
                        </p>
                        <p class="m-0">
                            Proin fringilla urna vel mattis euismod. Etiam sodales, massa non tincidunt iaculis, mauris libero scelerisque justo, ut rutrum lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan. Donec sit amet ligula et enim semper viverra a in arcu. Vestibulum enim ligula, varius sed enim vitae, posuere molestie velit. Morbi risus orci, congue in nulla at, sodales fermentum magna.
                        </p>
                    </div>
                    <div id="reviews" class="tab-pane fade">

                        <!-- review-item - start -->
                        <div class="review-item clearfix">
                            <span class="reviewer-img"></span>
                            <div class="review-content">
                                <div class="post-meta ul-li">
                                    <ul>
                                        <li>By <a href="#!">George Stven</a></li>
                                        <li><i class="flaticon-clock-circular-outline"></i> on Sep 26, 2018   at 20:30</li>
                                    </ul>
                                </div>
                                <p class="m-0">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                        <!-- review-item - end -->

                        <!-- review-item - start -->
                        <div class="review-item clearfix">
                            <span class="reviewer-img"></span>
                            <div class="review-content">
                                <div class="post-meta ul-li">
                                    <ul>
                                        <li>By <a href="#!">George Stven</a></li>
                                        <li><i class="flaticon-clock-circular-outline"></i> on Sep 26, 2018   at 20:30</li>
                                    </ul>
                                </div>
                                <p class="m-0">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                        <!-- review-item - end -->

                        <!-- review-item - start -->
                        <div class="review-item clearfix">
                            <span class="reviewer-img"></span>
                            <div class="review-content">
                                <div class="post-meta ul-li">
                                    <ul>
                                        <li>By <a href="#!">George Stven</a></li>
                                        <li><i class="flaticon-clock-circular-outline"></i> on Sep 26, 2018   at 20:30</li>
                                    </ul>
                                </div>
                                <p class="m-0">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                        <!-- review-item - end -->

                    </div>
                </div>
            </div>
            <!-- product-details-tab - end -->

        </div>
    </section>
    <!-- product-details-section - end
    ================================================== -->





    <!-- featured-section - start
    ================================================== -->
    <section id="featured-section" class="featured-section mb-30 clearfix">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>related products</h2>
                    </div>
                </div>
                @foreach($product->relatedProduct as $product)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-item">
                        <div class="post-labels">
                            <ul class="clearfix">
                                {{--<li class="bg-primary">new</li>--}}
                                {{--<li class="bg-danger">-50%</li>--}}
                            </ul>
                        </div>
                        <div class="image-container">
                            <img src="{{$product->image}}" alt="image_not_found">
                            <a href="{{route('products.single',[$product->id])}}" class="quick-view">
                                <i class="fas fa-eye"></i>
                                quick view
                            </a>
                        </div>
                        <div class="item-content text-center">
                            <a href="{{route('products.single',[$product->id])}}" class="item-title">{{$product->name}}</a>
                            <div class="item-price">
                                <strong class="color-black">{{$product->price}}</strong>
                                <del>{{$product->price}}</del>
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
                            @if($product->checkStock!="Out Of Stock")
                                <form>
                                    @csrf
                                    <input type="hidden" value="{{$product->name}}" name="name" id="name_{{$product->id}}">
                                    <input type="hidden" value="{{$product->image}}" name="imgages" id="imgages_{{$product->id}}">
                                    <input type="hidden" value="{{$product->id}}" name="id" id="p_id_{{$product->id}}">
                                    <input type="hidden" value="{{$product->price}}" name="price" id="price_{{$product->id}}">
                                    <input type="hidden" value="1" name="qty" id="qty_{{$product->id}}">
                                    <button class="add-to-cart"  data-panel-id="{{$product->id}}" onclick="storeToCart(this)"  type="button" >
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
    </section>
    <!-- featured-section - end
    ================================================== -->
    @endsection

@section('js')

    {{--<input type="hidden" value="{{$product->name}}" name="name" id="name">--}}
    {{--<input type="hidden" value="{{$product->image}}" name="img" id="img">--}}
    {{--<input type="hidden" value="{{$product->id}}" name="id" id="p_id">--}}
    {{--<input type="hidden" value="{{$product->price}}" name="price" id="price">--}}
    {{--<input type="hidden" value="1" name="qty" id="qty">--}}
    @endsection