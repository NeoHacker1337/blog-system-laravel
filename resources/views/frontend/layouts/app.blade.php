<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!--================= Favicon =================-->
        <link rel="apple-touch-icon" href="assets/images/fav.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/fav.png')}}">
        <!--================= Bootstrap V5 css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <!--================= Fontawesome  css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/all.min.css')}}">
        <!--================= Rounded  css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/rounded.css')}}">
        <!--================= Back Menus css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/back-menus.css')}}">
        <!--================= Animate css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css')}}">
        <!--================= Owl Carousel css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}">
        <!--================= Magnific Popup css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}">
        <!--================= Style css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
        <!--================= Spacing css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/back-spacing.css')}}">
        <!--================= Responsive css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
</head>
<body>
    <div id="app">

        <!--================= Preloader Section Start Here =================-->
        <!-- <div id="back__preloader">
            <div id="back__circle_loader"></div>
            <div class="back__loader_logo"><img src="{{asset('images/preload.png')}}" alt="Preload"></div>
        </div>         -->
        <!--================= Preloader Section End Here =================-->

        <!--================= Header Section Start Here =================-->
        <header id="back-header" class="back-header">
            <!--================= Topbar Section Start Here =================-->
            <div class="toolbar-area hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="toolbar-text">
                                <div class="latest-news-title">LATEST NEWS</div>
                                <div class="latest-news">
                                    <div class="back-topbar-slider owl-carousel">
                                        <div>Because you deserve nothing but the truth</div>
                                        <div>Pandemic impact mental health global view</div>
                                        <div>Drunk driving law by on country and arrest</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="toolbar-content">
                                <div class="toolbar-sl-share">
                                    <ul>
                                        <li class="back-follow">Follow Us</li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Topbar Section End Here =================-->
            <div class="menu-part">
                <div class="container">
                    <!--================= Back Menu Start Here =================-->
                    <div class="back-main-menu">
                        <nav>
                            <!--================= Menu Toggle btn =================-->
                            <div class="menu-toggle">
                                <div class="logo"><a href="{{url('/')}}" class="logo-text"> <img class="back-logo-dark" src="{{asset('frontend/images/logo.png')}}" alt="logo">
                                  <img class="back-logo-light" src="{{asset('frontend/images/light-logo.png')}}" alt="logo"> </a></div>

                                <div class="searchbar-part back-search-mobile">
                                    <ul>
                                        <li class="back-dark-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light1"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark1"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></li>
                                        <li class="back_search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></li>
                                        <li class="back-sign"><a href="{{route('login')}}">Sign In</a></li>
                                        <li id="nav-expanders" class="nav-expander bar">
                                            <span class="back-hum1"></span>
                                            <span class="back-hum2"></span>
                                            <span class="back-hum3"></span>
                                        </li>
                                    </ul>
                                    <form class="search-form">
                                        <input type="text" class="form-input" placeholder="Search Here">
                                        <button type="submit" class="form-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </form>
                                </div>

                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================-->
                            <div class="back-inner-menus">
                                <ul id="backmenu" class="back-menus back-sub-shadow">
                                    <li> <a href="{{url('/')}}">Home</a>

                                    </li>
                                    <li> <a href="#">About</a></li>

                                    <li> <a href="#">Pages</a>
                                        <ul>
                                            <li> <a href="#">About Author</a></li>
                                            <li> <a href="#">Terms and Conditions</a></li>
                                            <li> <a href="#">Privacy & Policy</a></li>
                                            <li> <a href="#">Registration</a></li>
                                            <li> <a href="#">Error 404</a></li>
                                        </ul>
                                    </li>

                                  <li> <a href="#">Contact</a></li>
                                </ul>

                                <div class="searchbar-part back-search-desktop">
                                    <ul>
                                        <li class="back-dark-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></li>
                                        <li class="back_search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></li>
                                        <li class="back-sign"><a href="{{route('login')}}">Sign In</a></li>
                                        <li id="nav-expander" class="nav-expander bar">
                                            <span class="back-hum1"></span>
                                            <span class="back-hum2"></span>
                                            <span class="back-hum3"></span>
                                        </li>
                                    </ul>
                                    <form class="search-form">
                                        <input type="text" class="form-input" placeholder="Search Here">
                                        <button type="submit" class="form-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--=================  Back Menu End Here  =================-->
                </div>
            </div>
        </header>
        <!--================= Header Section End Here =================-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  <!--================= Footer Section Start Here =================-->
  <footer id="back-footer" class="back-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 md-mb-30">
                            <div class="footer-widget footer-widget-1">
                                <div class="footer-logo white">
                                    <a href="{{url('/')}}" class="logo-text"> <img src="{{asset('frontend/images/light-logo.png')}}" alt="logo"></a>
                                </div>
                                <h5 class="footer-subtitle">We have lots of courses and programs from the main market experts.</h5>
                                <h6 class="back-follow-us">Follow us</h6>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 md-mb-30">
                            <div class="footer-widget footer-widget-2">
                                <h3 class="footer-title">Tags Cloud</h3>
                                <div class="footer-tag">
                                    <ul>
                                        <li><a href="#">Technology</a></li>
                                        <li><a href="#l">Sports</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">Health</a></li>
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Entertainment</a></li>
                                        <li><a href="#">Themes</a></li>
                                        <li><a href="#">Plugins</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 md-mb-30">
                            <div class="footer-widget footer-widget-2">
                                <h3 class="footer-title">Quick links</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Browse Library</a></li>
                                        <li><a href="#">TV News</a></li>
                                        <li><a href="#">Music News</a></li>
                                        <li><a href="#">News & Blog</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Advertise</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-widget footer-widget-3">
                                <h3 class="footer-title">Newsletter</h3>
                                <h5 class="footer-subtitle">Subscribe to our mailing list to <br>get the new updates!</h5>
                                <form class="back-newsletter">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="back-copy-left">@ 2022 All Copyright Reserved. Developed by <a href="#">Mahender Singh</a></div>
                    <div class="back-copy-right">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================= Footer Section End Here =================-->
     <!--================= Scroll to Top Start =================-->
     <div id="backscrollUp">
            <span aria-hidden="true" class="fi-rr-arrow-small-up"></span>
        </div>
        <!--================= Scroll to Top End =================-->

        <!--================= Jquery latest version =================-->
        <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <!--================= Bootstrap js =================-->
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <!--================= Owl Carousel js =================-->
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <!--================= Magnific Popup =================-->
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <!--================= Wow js =================-->
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
        <!--================= Back menus js =================-->
        <script src="{{asset('frontend/js/back-menus.js')}}"></script>
        <!--================= Plugins js =================-->
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
		<!--================= Main js =================-->
        <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
