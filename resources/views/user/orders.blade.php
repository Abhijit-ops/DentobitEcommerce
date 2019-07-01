@extends('layouts.main')

@section('css')
    <style>
        .table thead>tr>td {
            border-bottom: none !important;
        }
    </style>
@endsection
@section('contents')
    <section id="contact-section" class="contact-section sec-ptb-60 clearfix">


        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                            <li class="list-group-item"><a href="{{route('user.orders')}}">Orders</a></li>
                            <li class="list-group-item"><a href="{{route('user.updateProfileForm')}}">Update Profile</a></li>
                            <li class="list-group-item"><a href="#">Logout</a></li>

                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        @if(count($orders) ==0)
                        <section id="error-section" class="error-section sec-ptb-20 clearfix">
                            <div class="container">
                                <div class="row justify-content-center">

                                    <div class="col-lg-6 col-md-8 col-sm-12">
                                        <div class="error-content text-center clearfix">

							<span class="icon">
								<i class="far fa-frown"></i>
							</span>
                                            <h2>Order<strong class="color-past"> Not  </strong>found </h2>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                            @else
                            <table class="table table-bordered mb-30">
                                <thead>
                                <tr>
                                    <th colspan="2">Invoice No</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Order Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $item)
                                    <tr>
                                        <td class="text-left" colspan="2">
                                            <span>DBE_{{$item->invoice_no}}</span>
                                        </td>
                                        <td class="text-center">
                                            @if($item->order_status==0)
                                            <div class="badge badge-danger">Pending</div>
                                            @else
                                                <div class="badge badge-success">Completed</div>

                                            @endif
                                        </td>
                                        <td class="text-center">{{$item->order_date}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @endif
                            <p class="text-right"> {{$orders->links()}}</p>

                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection