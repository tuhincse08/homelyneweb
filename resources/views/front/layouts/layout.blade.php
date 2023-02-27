<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('assets/front/images/favicon/1.png') }}" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.min.css') }}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/font-awesome.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/feather-icon.css') }}">

    <!-- Plugin CSS file with desired skin css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/vendors/ion.rangeSlider.min.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/slick/slick-theme.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bulk-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/vendors/animate.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}">
</head>

<body class="bg-effect">

<!-- Loader Start -->
<!-- <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div> -->
<!-- Loader End -->

<!-- Header Start -->
@include('front.layouts.header')
<!-- Header End -->

<!-- mobile fix menu start -->
@include('front.layouts.mobile_menu')
<!-- mobile fix menu end -->

<!-- Content -->
@yield('content')
<!-- Content End -->

<!-- Footer Section Start -->
@include('front.layouts.footer')
<!-- Footer Section End -->

<!-- All Modal Box Start -->
@include('front.layouts.modals')
<!-- All Modal Modal Box end -->


<!-- Tap to top start -->
<div class="theme-option">
    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- latest jquery-->
<script src="{{ asset('assets/front/js/jquery-3.6.0.min.js')}}"></script>

<!-- jquery ui-->
<script src="{{ asset('assets/front/js/jquery-ui.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/front/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/front/js/bootstrap/bootstrap-notify.min.js')}}"></script>
<script src="{{ asset('assets/front/js/bootstrap/popper.min.js')}}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/front/js/feather/feather.min.js')}}"></script>
<script src="{{ asset('assets/front/js/feather/feather-icon.js')}}"></script>

<!-- Lazyload Js -->
<script src="{{ asset('assets/front/js/lazysizes.min.js')}}"></script>

<!-- Slick js-->
<script src="{{ asset('assets/front/js/slick/slick.js')}}"></script>
<script src="{{ asset('assets/front/js/slick/slick-animation.min.js')}}"></script>
<script src="{{ asset('assets/front/js/custom-slick-animated.js')}}"></script>
<script src="{{ asset('assets/front/js/slick/custom_slick.js')}}"></script>

<!-- Range slider js -->
<script src="{{ asset('assets/front/js/ion.rangeSlider.min.js')}}"></script>

<!-- Auto Height Js -->
<script src="{{ asset('assets/front/js/auto-height.js')}}"></script>

<!-- Timer Js -->
<script src="{{ asset('assets/front/js/timer1.js')}}"></script>

<!-- Fly Cart Js -->
<script src="{{ asset('assets/front/js/fly-cart.js')}}"></script>

<!-- Quantity js -->
<script src="{{ asset('assets/front/js/quantity-2.js')}}"></script>

<!-- WOW js -->
<script src="{{ asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/front/js/custom-wow.js')}}"></script>

<!-- script js -->
<script src="{{ asset('assets/front/js/script.js')}}"></script>
</body>

</html>
