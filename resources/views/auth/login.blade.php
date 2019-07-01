@extends('layouts.main')

@section('contents')
    <section id="login-reg-section" class="login-reg-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">

                <!-- login-container - start -->
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="login-container">
                        <h2 class="form-title">login your account</h2>
                        <div class="social-accounts">
                            <span>Login with Social Account</span>
                            <ul>
                                <li><a href="#!"><i class="fab fa-facebook-square"></i> facebook</a></li>
                                <li><a href="#!"><i class="fab fa-twitter-square"></i> twitter</a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-square"></i> google plus</a></li>
                            </ul>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-item">
                                    <input type="text" id="user-name" placeholder="User Name" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label class="form-item-btn" for="user-name">
                                        <i class="far fa-user"></i>
                                    </label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <input type="password" id="user-pass" placeholder="Password"
                                           class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                    >
                                    <label class="form-item-btn" for="user-pass">
                                        <i class="fas fa-unlock-alt"></i>
                                    </label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="custom-form-check mb-30">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="custom-form-check">
                                                <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">Remember Me</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="forgetpass-btn">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif

                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="custom-btn bg-past">login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- login-container - end -->



            </div>
        </div>
    </section>
@endsection
