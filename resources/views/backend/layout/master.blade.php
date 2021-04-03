<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/philbert/full-width-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:07:14 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Philbert I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/favicon.ico')}}">
    <link rel="icon" href="{{asset('backend/favicon.ico')}}" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="https://hencework.com/theme/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

    <!-- Data table CSS -->
    <link href="https://hencework.com/theme/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://hencework.com/theme/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://hencework.com/theme/vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>

    <link href="https://hencework.com/theme/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
    <link href="https://hencework.com/theme/vendors/bower_components/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="{{asset('backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper theme-1-active pimary-color-green">
    <!-- Top Menu Items -->
    @include('backend.layout.header')
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    @include('backend.layout.menu')
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
    <!-- /Right Sidebar Menu -->

    <!-- Right Setting Menu -->
    @include('backend.layout.setting')
    <!-- /Right Setting Menu -->

    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper">

        @yield('content')
        <!-- Footer -->
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="https://hencework.com/theme/vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://hencework.com/theme/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Data table JavaScript -->
<script src="https://hencework.com/theme/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('backend/dist/js/jquery.slimscroll.js')}}"></script>

<!-- simpleWeather JavaScript -->
<script src="https://hencework.com/theme/vendors/bower_components/moment/min/moment.min.js"></script>
<script src="https://hencework.com/theme/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
<script src="{{asset('backend/dist/js/simpleweather-data.js')}}"></script>

<!-- Progressbar Animation JavaScript -->
<script src="https://hencework.com/theme/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="https://hencework.com/theme/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('backend/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- Sparkline JavaScript -->
<script src="https://hencework.com/theme/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Owl JavaScript -->
<script src="https://hencework.com/theme/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- ChartJS JavaScript -->
<script src="https://hencework.com/theme/vendors/chart.js/Chart.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="https://hencework.com/theme/vendors/bower_components/raphael/raphael.min.js"></script>
<script src="https://hencework.com/theme/vendors/bower_components/morris.js/morris.min.js"></script>
<script src="https://hencework.com/theme/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

<!-- Switchery JavaScript -->
<script src="https://hencework.com/theme/vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Init JavaScript -->
<script src="{{asset('backend/dist/js/init.js')}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('editor1'); </script>
@yield('script')
</body>


<!-- Mirrored from hencework.com/theme/philbert/full-width-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:07:16 GMT -->
</html>
