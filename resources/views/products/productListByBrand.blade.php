@extends('layouts.main')


@section('contents')
    <!-- breadcrumb-section - start
		================================================== -->
    <section id="breadcrumb-section" class="breadcrumb-section clearfix">

        <!-- breadcrumb-big-title - start -->
        <div class="breadcrumb-big-title" style="background-image: url(assets/images/breadcrumb/bg-image-1.jpg);">
            <div class="overlay-black sec-ptb-100">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h2 class="title-text">New Arrivals <strong>On sale 50% Off</strong></h2>
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
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">{{$brandName}}</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb-list - end -->

    </section>
    <!-- breadcrumb-section - end
    ================================================== -->





    <!-- product-section start
    ================================================== -->
    <section id="product-section" class="product-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">

                <!-- sidebar-section - start -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="sidebar-section">


                        <!-- brand-list - start -->
                        <div class="sidebar-item brand-list ul-li-block mb-30">
                            <div class="sidebar-title">
                                {{--<h2>{{$brandName}} products</h2>--}}
                            </div>
                            {{--<ul class="clearfix">--}}
                                {{--@foreach($sidenNavBrandCount as $navCount)--}}
                                {{--<li><a href="#!">{{$navCount->brand_name}} <span class="float-right">({{$navCount->total}})</span></a></li>--}}
                                    {{--@endforeach--}}
                            {{--</ul>--}}
                        </div>
                        <!-- brand-list - end -->
                    </div>
                </div>
                <!-- sidebar-section - end -->

                <!-- product-grid-section - start -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="product-grid-section">
                        <div class="row">

                            <!-- tab-content - start -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content mb-60">

                                    <div id="grid-style" class="tab-pane fade in active show">
                                        <div class="row">
                                            @foreach($products as $product)
                                            <!-- product-item - start -->
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="product-item">

                                                    <div class="post-labels">
                                                        <ul class="clearfix">
                                                            <li class="bg-primary">new</li>
                                                            <li class="bg-danger">-50%</li>
                                                        </ul>
                                                    </div>

                                                    <div class="image-container">
                                                        <img src="{{$product->image}}" alt="image_not_found">
                                                        <a href="{{route('products.single',[$product->id])}}" class="quick-view">
                                                            <i class="fas fa-eye"></i>
                                                             view
                                                        </a>
                                                    </div>

                                                    <div class="item-content text-center">
                                                        <a href="#!" class="item-title">{{$product->name}}</a>
                                                        <div class="item-price">
                                                            <strong class="color-black">{{$product->price}}</strong>
                                                            <del>$359.00</del>
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
                                                        <div class="product-meta ul-li-center">
                                                            <ul class="clearfix">
                                                                <li><a href="#!"><i class="flaticon-heart"></i></a></li>
                                                                <li><a href="#!"><i class="flaticon-libra"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- product-item - end -->
                                                @endforeach

                                        </div>
                                    </div>

                           @if(count($products) ==null)
                                        <div class="alert alert-danger">
                                            No Product found in this Category
                                        </div>
                               @endif

                                </div>
                            </div>
                            <!-- tab-content - end -->

                            <!-- pagination-section - start -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="pagination-section ul-li-right">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="pagination-list">
                                                {{$products->links()}}
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- pagination-section - end -->

                        </div>
                    </div>
                </div>
                <!-- product-grid-section - end -->

            </div>
        </div>
    </section>
    <!-- product-section end
    ================================================== -->

    @endsection