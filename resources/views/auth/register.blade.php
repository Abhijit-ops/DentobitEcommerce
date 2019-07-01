@extends('layouts.main')

@section('contents')
    <section id="login-reg-section" class="login-reg-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">



                <!-- register-container - start -->
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="register-container">
                        <h2 class="form-title">don't have an account? register now!</h2>
                        <div class="register-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-item">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                           placeholder="Enter Your Name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label class="form-item-btn" for="your-email">
                                        <i class="far fa-envelope"></i>
                                    </label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-item">
                                    <input id="email" type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label class="form-item-btn" for="your-email">
                                        <i class="far fa-envelope"></i>
                                    </label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <input type="text" id="login-name" placeholder="User Name">
                                    <label class="form-item-btn" for="login-name">
                                        <i class="far fa-user"></i>
                                    </label>
                                </div>
                                <div class="form-item">
                                    <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    <label class="form-item-btn" for="login-pass">
                                        <i class="fas fa-unlock-alt"></i>
                                    </label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <label class="form-item-btn" for="login-pass">
                                        <i class="fas fa-unlock-alt"></i>
                                    </label>
                                </div>
                                <div class="custom-form-check mb-30">
                                    <input type="checkbox" id="agree" required>
                                    <label for="agree">I agree to <strong class="color-black">Terms & Conditions</strong></label>
                                </div>
                                <button type="submit" class="register-btn">register now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- register-container - end -->

            </div>
        </div>
    </section>
@endsection
