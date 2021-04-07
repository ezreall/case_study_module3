


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
    <link rel="stylesheet" href=" http://fortawesome.github.io/Font-Awesome">
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

    <div class="col-md-6">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">horizontal form with right icon</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <form action="{{route('store.register')}}" method="POST">

                <div class="panel-body">
                    <div class="row">
                            @csrf
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-wrap">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="exampleInputuname_4" class="col-sm-3 control-label">Username*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="name" type="text" class="form-control" id="exampleInputuname_4" placeholder="Username">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail_4" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail_4" placeholder="Enter email">
                                                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputpwd_5" class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="password" type="password" class="form-control" id="exampleInputpwd_5" placeholder="Enter pwd">
                                                <div class="input-group-addon"><i class="icon-lock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputpwd_6" class="col-sm-3 control-label">Re Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="password" type="password" class="form-control" id="exampleInputpwd_6" placeholder="Re Enter pwd">
                                                <div class="input-group-addon"><i class="icon-lock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-info ">Sign in</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

            </div>

        </div>
    </div>

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
