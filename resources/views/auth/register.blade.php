@extends('frontend.layouts.auth')
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
                                <h2 class="text-white">Create Your Account !</h2>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Sign Up
                        </h1>
                        <p class="text-center mb-5">
                          Access to our dashboard.
                        </p>

    <!--Sign Up form-->
    <form class="login-signup-form" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
            <!-- Label -->
            <label class="pb-1">
              {{ __('Name') }}
            </label>
            <!-- Input group -->
            <div class="input-group input-group-merge">
                <div class="input-icon">
                    <span class="ti-user color-primary"></span>
                </div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
            </div>
        </div>
        <div class="form-group">
            <!-- Label -->
            <label class="pb-1">
              {{ __('E-Mail Address') }}
            </label>
            <!-- Input group -->
            <div class="input-group input-group-merge">
                <div class="input-icon">
                    <span class="ti-email color-primary"></span>
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@address.com" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- Password -->
        <div class="form-group">
            <!-- Label -->
            <label class="pb-1">
                {{ __('Password') }}
            </label>
            <!-- Input group -->
            <div class="input-group input-group-merge">
                <div class="input-icon">
                    <span class="ti-lock color-primary"></span>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <!-- Label -->
            <label class="pb-1">
                {{ __('Confirm Password') }}
            </label>
            <!-- Input group -->
            <div class="input-group input-group-merge">
                <div class="input-icon">
                    <span class="ti-lock color-primary"></span>
                </div>
                <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password" name="password_confirmation"  required autocomplete="new-password">
            </div>
        </div>
        <div class="form-check d-flex align-items-center text-center">
            <input type="checkbox" class="form-check-input mt-0 mr-3" id="exampleCheck1" required>
            <label class="form-check-label small" for="exampleCheck1" >I agree your <a href="#">Terms & Conditions</a></label>
        </div>
        <!-- Submit -->
               <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                   Sign up
               </button>
                                   <!-- Link -->
                                   <div class="text-center">
                                       <small class="text-muted text-center">
                                           Already have an account? <a href="{{url('login')}}">Log in</a>.
                                       </small>
                                   </div>
                    </form>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>
    <!--hero section end-->
@endsection
