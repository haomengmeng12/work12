<!DOCTYPE html>
<!--[if lt IE 9 ]> <html lang="en" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]> <html lang="en" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en" dir="ltr" class="no-js">
<!--<![endif]-->
<head>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE TITLE                                -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <title>@yield('title', '爱家教')</title>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SEO METAS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="爱家教,全国中小学上门、在线全科辅导品牌，提供了全国范围内的上门一对一，以及高端在线教育服务，已迅速获得全国家长青睐，成为几十万家庭的选择。">
    <meta name="black friday, coupon, coupon codes, coupon theme, coupons, deal news, deals, discounts, ecommerce, friday deals, groupon, promo codes, responsive, shop, store coupons">
    <meta name="Keywords" content="在线全科辅导品牌，提供了全国范围内的上门一对一，以及高端在线教育服务" />

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE FAVICON                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" href="{{ asset('assets/shop/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/shop/images/favicon/favicon.ico') }}'">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Include CSS Filess                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap -->
    <link href="{{ asset('assets/shop/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('assets/shop/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/shop/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/shop/css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body id="body" class="wide-layout preloader-active">
<!--[if lt IE 9]>
<p class="browserupgrade alert-error">
    你用<strong>过时</strong>浏览器。请<a href="http://browsehappy.com/">升级您的浏览器</a>来提高你的经验。
</p>
<![endif]-->

<noscript>
    <div class="noscript alert-error">
        对于本网站有必要启用JavaScript的全部功能。这是
        <a href="http://www.enable-javascript.com/" target="_blank">
            说明如何启用JavaScript在Web浏览器中</a>.
    </div>
</noscript>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- 加载动画                                 -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Preloader -->
<div id="preloader" class="preloader">
    <div class="loader-cube">
        <div class="loader-cube__item1 loader-cube__item"></div>
        <div class="loader-cube__item2 loader-cube__item"></div>
        <div class="loader-cube__item4 loader-cube__item"></div>
        <div class="loader-cube__item3 loader-cube__item"></div>
    </div>
</div>
<!-- End Preloader -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- WRAPPER                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<div id="pageWrapper" class="page-wrapper">
<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

    <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
@yield('main')
<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

@include('common.home.area')
<!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
@include('common.home.footer')
<!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

</div>
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- END WRAPPER                               -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->


<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- 回到顶部                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<div id="backTop" class="back-top is-hidden-sm-down">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- SCRIPTS                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->

<!-- (!) Placed at the end of the document so the pages load faster -->

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Initialize jQuery library                 -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script src="{{ asset('assets/shop/js/jquery-1.12.3.min.js') }}"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Latest compiled and minified Bootstrap    -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="{{ asset('assets/shop/js/bootstrap.min.js') }}"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- JavaScript Plugins                        -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- (!) Include all compiled plugins (below), or include individual files as needed -->

<!-- Modernizer JS -->
<script src="{{ asset('assets/shop/vendors/modernizr/modernizr-2.6.2.min.js') }}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('assets/shop/vendors/owl-carousel/owl.carousel.min.js') }}"></script>

<!-- FlexSlider -->
<script type="text/javascript" src="{{ asset('assets/shop/vendors/flexslider/jquery.flexslider-min.js') }}"></script>

<!-- Coutdown -->
<script type="text/javascript" src="{{ asset('assets/shop/vendors/countdown/jquery.countdown.js') }}"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Custom Template JavaScript                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="{{ asset('assets/shop/js/main.js') }}"></script>

@yield('script')
</body>

</html>

