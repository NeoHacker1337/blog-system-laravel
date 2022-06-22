@extends('frontend.layouts.auth')
@section('content')

    <!--hero section start-->
    <section class="hero-section full-screen gray-light-bg">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

                    <!-- Image -->
                    <div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url({{asset('public/frontend/img/slider-img-3.jpg')}});">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <h2 class="text-white">Don't Worry You Can Reset Password? <br/> </h2>
                               </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Password Reset
                        </h1>

                        <!-- Subheading -->
                        <p class="text-muted text-center mb-5">
                            Enter your email to get a password reset link.
                        </p>
                        @if (session('status'))
                       <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                       </div>
                   @endif
                        <!-- Form -->
                        <form class="login-signup-form" method="POST" action="{{ route('password.email') }}">
                          @csrf
                            <div class="form-group">
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-email color-primary"></span>
                                    </div>
                                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@address.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <!-- Submit -->
                            <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" type="submit">
                                {{ __('Send Password Reset Link') }}
                            </button>

                            <!-- Link -->
                            <div class="text-center">
                                <small class="text-muted text-center">
                                    Remember your password? <a href="{{route('login')}}">Log in</a>.
                                </small>
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
     </section>
@endsection
