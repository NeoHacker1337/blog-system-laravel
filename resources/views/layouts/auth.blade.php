<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- SEO Meta description -->
    <meta name="description" content="">
    <meta name="author" content="ThemeTags">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>
    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">

    <!--Bootstrap css-->
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <!--Magnific popup css-->
  <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
  <!--Themify icon css-->
  <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
  <!--Fontawesome icon css-->
  <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
  <!--animated css-->
  <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
  <!--ytplayer css-->
  <link rel="stylesheet" href="{{asset('frontend/css/jquery.mb.YTPlayer.min.css')}}">
  <!--Owl carousel css-->
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
  <!--custom css-->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/style2.css')}}">
  <!--responsive css-->
  <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--body content wrap start-->
<div class="main">

  @yield('content')

</div>

<!--jQuery-->
<script src="{{asset('frontend/js/jquery-3.5.0.min.js')}}"></script>
<!--Popper js-->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!--Bootstrap js-->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!--Magnific popup js-->
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!--jquery easing js-->
<script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
<!--jquery ytplayer js-->

<!--Isotope filter js-->
<script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
<!--wow js-->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<!--owl carousel js-->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>

<!--countdown js-->
<script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
<!--jquery easypiechart-->
<script src="{{asset('frontend/js/jquery.easy-pie-chart.js')}}"></script>
<!--custom js-->
<script src="{{asset('frontend/js/scripts.js')}}"></script>
</body>
</html>
