@extends('layouts.main')
@section('css')
    <style>
        /* The container */
        .container-checkbox {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom checkbox */
        .container-checkbox .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .container-checkbox:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container-checkbox input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .container-checkbox .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container-checkbox input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container-checkbox .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }


        /* The container */
        .container-radio {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container-radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .container-radio .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container-radio:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container-radio input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .container-radio .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container-radio input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container-radio .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
@stop

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
                            <h2 class="title-text">women's fashion</h2>
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
                    <li class="active">checkout</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb-list - end -->

    </section>
    <!-- breadcrumb-section - end
    ================================================== -->





    <!-- checkout-section start
    ================================================== -->
    <section id="checkout-section" class="checkout-section sec-ptb-60 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">

                @if(Cart::count()==0)
                    <h2>No Item In Your Shopping Cart ! Please Add Some Product To checkout</h2>
                @else
                    <div class="col-lg-8 col-md-12 col-sm-12">

                        <div class="checkout-content">
                            <ul class="nav checkout-nav mb-60">


                            </ul>
                            <div class="tab-content">

                                <div id="menu1" class="tab-pane fade in active show">

                                    <div class="section-title">
                                        <h2>Billing address</h2>
                                        <p>
                                            {!! nl2br(Auth::user()->billing_address) !!}
                                        </p>
                                    </div>

                                    <form  action="{{route('product.finalCheckOut')}}" method="post">
                                        <input type="checkbox" name="checkShip" id="checkShip"> If you want to ship another address
                                        <br>
                                        <div class="row" id="shippingForm">
                                                @csrf
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-item">
                                                    <span class="input-title">First Name<sup>*</sup></span>
                                                    <input type="text" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-item">
                                                    <span class="input-title">Last Name<sup>*</sup></span>
                                                    <input type="text" name="lastName">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-item">
                                                    <span class="input-title">Phone<sup>*</sup></span>
                                                    <input type="tel" name="receiver_phone">
                                                </div>
                                            </div>


                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="address-textarea mb-30">
                                                    <span class="input-title">Shipping Address<sup>*</sup></span>
                                                    <textarea name="shipping_address"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-item">
                                                    <span class="input-title">City<sup>*</sup></span>
                                                    <input type="text" name="receiver_city">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-item">
                                                    <span class="input-title">Zip/Postal Code<sup>*</sup></span>
                                                    <input type="text" name="receiver_post_code">
                                                </div>
                                            </div>


                                        </div>
                                        <input type="submit" class="next-btn custom-btn bg-past mt-5" value="Proceed To Order">

                                    </form>

                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="checkout-sidebar-section">

                            <div class="order-summary mb-30 clearfix">
                                <div class="section-title">
                                    <h2>Order Summary</h2>
                                </div>

                                <span class="item-amount mb-15">{{Cart::content()->count()}} items in cart</span>
                                <div class="item-summary">
                                    <div class="shopping-cart-table mb-60">
                                        <table class="table table-bordered mb-30">
                                            <thead>
                                            <tr>
                                                <th colspan="2">products</th>
                                                <th scope="col">price</th>
                                                <th scope="col">total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cartItems as $item)
                                                <tr>
                                                    <td class="text-left" colspan="2">
                                                        <span>{{$item->name}}</span>
                                                    </td>
                                                    <td class="text-center">${{$item->price}}</td>
                                                    <td class="text-center">${{$item->price*$item->qty}}</td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>



                                    </div>
                                </div>

                            </div>

                            <div class="shipping-method clearfix">
                                <div class="section-title">
                                    <h2>Payment Methods</h2>
                                </div>

                                <div class="shipping-methods-table bg-gray clearfix">

                                    <input type="radio" checked name="paymentType" value="male"> Cash On Delivery<br>

                                </div>
                            </div>

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
    <!-- checkout-section end
    ================================================== -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#shippingForm').hide();
            $('#checkShip').click(function () {
                if ($(this).prop("checked") == true) {
                    $("#shippingForm").show(500);
                } else if($(this).prop("checked") == false) {
                    $('#shippingForm').hide();
                }
                else {
                }
            });
        });
    </script>

@endsection