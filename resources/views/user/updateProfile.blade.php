@extends('layouts.main')

@section('contents')
    <section id="login-reg-section" class="login-reg-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">



                <!-- register-container - start -->
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="register-container">
                        <h2 class="form-title">Profile Updated</h2>
                        <div class="register-form">
                            <form method="POST" action="{{ route('user.updateProfile') }}">
                                @csrf
                                <div class="form-item">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                           placeholder="Enter Your Name"  name="name" value="{{$user->name }}" required autocomplete="name" autofocus>
                                    <label class="form-item-btn" for="your-email">
                                        <i class="far fa-envelope"></i>
                                    </label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="form-item">
                                    <input id="email" type="number" placeholder="Enter Your Phone" class="form-control @error('email') is-invalid @enderror"
                                           name="phone" value="{{ $user->phone}}"  autocomplete="phone">
                                    <label class="form-item-btn" for="your-email">
                                        <i class="fa fa-phone"></i>
                                    </label>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ phone }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <input type="text" id="login-name" placeholder="User Name" value="{{$user->username}}">
                                    <label class="form-item-btn" for="login-name">
                                        <i class="far fa-user"></i>
                                    </label>
                                </div>
                                <div class="form-item">
                                    <input id="password" type="number" placeholder="Enter PostCode"
                                           class="form-control @error('post_code') is-invalid @enderror" name="post_code"
                                           autocomplete="post_code" value="{{$user->post_code}}">

                                    <label class="form-item-btn" for="login-pass">
                                        <i class="fas fa-sort-numeric-down"></i>
                                    </label>
                                    @error('post_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <textarea class="form-control" rows="5" name="billing_address" placeholder="Enter Address"
                                              style="resize: none">{{ $user->billing_address }}</textarea>
                                    @error('billing_address')
                                    <p class="color-gplus-red text-left">Billing Address is requried</p>
                                    @enderror
                                </div>

                                <button type="submit" class="register-btn">Update now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- register-container - end -->

            </div>
        </div>
    </section>
    @endsection