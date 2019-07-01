@extends('layouts.main')

@section('contents')
    <section id="checkout-section" class="checkout-section sec-ptb-60 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">
                <h2>Your Order ID <strong>DBE_{{$cartData->order_id}}</strong><br></h2>

            </div>
        </div>
    </section>
    @endsection