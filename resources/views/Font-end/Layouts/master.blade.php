<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.kendytheme.net/tancho/index-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 16:18:45 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Tancho - Grid Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" href="images/favicon.html" sizes="32x32" />

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700%7CCrete+Round' type='text/css' media='all' />

    <link rel="stylesheet" type="text/css" href="{{asset('font-end/css/libs/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-end/css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-end/css/styles.css')}}">
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
                <a href="index-2.html">
                    <img src="images/logo-mobile.png" alt="Logo">
                </a>
            </div>
            <!-- End Logo -->
        </div>
    </div>
    <div class="hide-menu"></div>
    <!-- End Mobile Menu -->

    <div class="container">
        <div class="row">
                @include('Font-end.Layouts.menu')
                @yield('content')
        </div>
    </div>
</div>
<!-- End Wrapper Site -->

<!-- Footer -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-3">
                <div class="footer-inner">
                    <div class="footer-widgets">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="widget">
                                    <h2 class="title"><span>About Me</span></h2>
                                    <p>
                                        I am tancho a Graphic Designer based in New York, specializing in User Interface Design and Development.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="widget">
                                    <h2 class="title"><span>Contact Me</span></h2>
                                    <ul>
                                        <li>
                                            Tel: +123 456 789
                                        </li>
                                        <li>
                                            Email: name@domain.com
                                        </li>
                                        <li>
                                            Address: 820 Utica Ave, Brooklyn, NY
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="widget">
                                    <h2 class="title"><span>Web Links</span></h2>
                                    <ul>

                                        <li><a href="#">Tips & tricks</a></li>
                                        <li><a href="#">Examples</a></li>
                                        <li><a href="#">Documentation</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="copyright">
                                    <p>Tancho @ 2018. Design by <a href="#">Kendy</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Scripts -->
<script src="{{asset('font-end/js/libs/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('font-end/js/libs/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('font-end/js/libs/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('font-end/js/scripts.js')}}"></script>
<!-- End Scripts -->

</body>

<!-- Mirrored from template.kendytheme.net/tancho/index-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 16:18:47 GMT -->
</html>
