@extends('layouts.auth')
@section('content')

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section full-screen gray-light-bg">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
                    <!-- Image -->
                    <div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url({{asset('public/frontend/img/slider-img-5.jpg')}});">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <h2 class="text-white">Welcome Back !</h2>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Sign In
                        </h1>
                        <p class="text-center mb-5">
                            Access to our dashboard.
                        </p>

                        <!--login form-->
                        <form class="login-signup-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="pb-1">{{ __('E-Mail Address') }}</label>

                            <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@yourdomain.com" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="pb-1">{{ __('Password') }}</label>
                                    </div>

                                    <div class="col-auto">
                                      @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="form-text small text-muted">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                          @endif
                                    </div>
                                </div>




                            <div class="input-group input-group-merge">
                              <div class="input-icon">
                                        <span class="ti-lock"></span>
                                    </div>
                                <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                            <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                {{ __('Login') }}
                            </button>

                        <!-- Link -->
                                <p class="text-center">
                                    <small class="text-muted text-center">
                                        Don't have an account yet? <a href="{{route('register')}}">Sign up</a>.
                                    </small>
                                </p>
                    </form>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>
    <!--hero section end-->
@endsection
