<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.kendytheme.net/kelly/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Mar 2021 09:46:33 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Kelly - Minimal Portfolio & Blog HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,600,700%7CLato:400,700' type='text/css' media='all' />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/libs/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs/justifiedGallery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
</head>

<body class="home">

<!-- Wrapper Site -->
<div id="main-content">

    <!-- Preload -->
    <div id="preload">
        <div class="kd-bounce">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preload -->

    <!-- Mobile Menu -->
    <div class="mobile">
        <div class="container">
            <!-- Mobile -->
            <div class="menu-mobile">
                <span class="item item-1"></span>
                <span class="item item-2"></span>
                <span class="item item-3"></span>
            </div>
            <!-- End Mobile -->

            <!-- Logo -->
            <div class="logo">
                <a href="index-2.html">Kelly</a>
            </div>
            <!-- End Logo -->
        </div>
    </div>
    <div class="hide-menu"></div>
    <!-- End Mobile Menu -->

    <div class="container">
        <div class="row">
@include('font-end.layouts.menu')

@yield('content')
        </div>
    </div>
</div>
<!-- End Wrapper Site -->

<!-- Footer -->
@include('font-end.layouts.footer')
{{--!-- End Footer -->--}}

<!-- Scripts -->
<script src="{{asset('js/libs/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.justifiedGallery.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<!-- End Scripts -->

</body>

<!-- Mirrored from template.kendytheme.net/kelly/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Mar 2021 09:47:00 GMT -->
</html>
