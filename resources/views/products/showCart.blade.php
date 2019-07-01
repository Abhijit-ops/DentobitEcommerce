@extends('layouts.main')


@section('contents')

    <!-- breadcrumb-section - start
		================================================== -->
    <section id="breadcrumb-section" class="breadcrumb-section clearfix">

        <!-- breadcrumb-big-title - start -->
        <div class="breadcrumb-big-title" style="background-image: url({{asset('images/breadcrumb/bg-image-1.jpg')}});">
            <div class="overlay-black sec-ptb-100">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h2 class="title-text">Shopping Cart</h2>
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
                    <li class="active">shopping cart</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb-list - end -->

    </section>
    <!-- breadcrumb-section - end
    ================================================== -->





    <!-- shopping-cart-section start
    ================================================== -->
    <section id="shopping-cart-section" class="shopping-cart-section sec-ptb-60 clearfix">
        <div class="container">
            @if($cartCount !=0)

            <!-- shopping-cart-table - start -->
            <div class="shopping-cart-table mb-60">
                <table class="table table-bordered mb-30">
                    <thead>
                    <tr>
                        <th colspan="2">products</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">total</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartItems as $item)
                    <tr>
                        <td class="text-left" colspan="2">
                            <span >{{$item->name}}</span>
                        </td>
                        <td class="text-center">${{$item->price}}</td>
                        <td class="item-quantity text-center">
                            <input type="number" placeholder="quantity" data-panel-id="{{$item->rowId}}"
                                  name="qtyItem" id="qtyItem_{{$item->rowId}}" onblur="updateQty(this)" min="1" value="{{$item->qty}}">
                        </td>
                        <td class="text-center">${{$item->price*$item->qty}}</td>
                        <td>
                            <button type="button" class="remove-btn" data-cart-item-id="{{$item->rowId}}"
                                    onclick="deleteCartItem(this),refressCart()" >
                                <i class="flaticon-dustbin"></i>
                            </button>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <a href="{{route('home')}}" class="continue-btn">continue shopping</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="text-right">
                            {{--<a href="#!" class="update-btn">update shopping cart</a>--}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="text-right">
                            <a href="{{route('cart.remove.all')}}" class="clear-btn">clear shopping cart</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- shopping-cart-table - end -->

            <div class="row">
                <!-- shipping-estimate - start -->
                <div class="col-lg-6 col-md-6 col-sm-12">

                </div>
                <!-- shipping-estimate - end -->

                <!-- grand-total-price - start -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="grand-total-price">

                        <div class="money-list ul-li-block">
                            <ul class="clearfix">
                                <li>subtotal <span class="float-right">${{Cart::subtotal()}}</span></li>
                                <li>tax <span class="float-right">${{Cart::tax()}}</span></li>
                            </ul>
                        </div>
                        <h2 class="total-price mb-30">grand total <strong>${{Cart::total()}}</strong></h2>
                        <a href="{{route('product.checkout')}}" class="proceed-btn">Proceed to checkout</a>

                    </div>
                </div>
                <!-- grand-total-price - end -->
            </div>
                @else

                   <p class="text-center" style="font-size: 60px;"><i class="flaticon-shopping-basket"></i></p>
                    <h1 class="text-center">Shopping Cart is Empty</h1>
                @endif
        </div>
    </section>
    <!-- shopping-cart-section end
    ================================================== -->

@endsection