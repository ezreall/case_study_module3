@extends('backend.layout.master')
@section('script')
    <script src="{{asset('backend/dist/js/dashboard-data.js')}}"></script>

@endsection
@section('content')
<div class="container-fluid pt-25">
    <!-- Row -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim">914,001</span></span>
                                        <span class="weight-500 uppercase-font block font-13">visits</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                        <i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim">46.41</span>%</span>
                                        <span class="weight-500 uppercase-font block">bounce rate</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                        <i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim">4,054,876</span></span>
                                        <span class="weight-500 uppercase-font block">pageviews</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                        <i class="icon-layers data-right-rep-icon txt-light-grey"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                        <span class="txt-dark block counter"><span class="counter-anim">46.43</span>%</span>
                                        <span class="weight-500 uppercase-font block">growth rate</span>
                                    </div>
                                    <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                                        <div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">user statistics</h6>
                    </div>
                    <div class="pull-right">
									<span class="no-margin-switcher">
										<input type="checkbox" checked id="morris_switch"  class="js-switch" data-color="#2ecd99" data-secondary-color="#dedede" data-size="small"/>
									</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div id="area_chart" class="morris-chart" style="height:293px;"></div>
                        <ul class="flex-stat mt-40">
                            <li>
                                <span class="block">Weekly Users</span>
                                <span class="block txt-dark weight-500 font-18"><span class="counter-anim">3,24,222</span></span>
                            </li>
                            <li>
                                <span class="block">Monthly Users</span>
                                <span class="block txt-dark weight-500 font-18"><span class="counter-anim">1,23,432</span></span>
                            </li>
                            <li>
                                <span class="block">Trend</span>
                                <span class="block">
												<i class="zmdi zmdi-trending-up txt-success font-24"></i>
											</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body sm-data-box-1">
                        <span class="uppercase-font weight-500 font-14 block text-center txt-dark">customer satisfaction</span>
                        <div class="cus-sat-stat weight-500 txt-success text-center mt-5">
                            <span class="counter-anim">93.13</span><span>%</span>
                        </div>
                        <div class="progress-anim mt-20">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <ul class="flex-stat mt-5">
                            <li>
                                <span class="block">Previous</span>
                                <span class="block txt-dark weight-500 font-15">79.82</span>
                            </li>
                            <li>
                                <span class="block">% Change</span>
                                <span class="block txt-dark weight-500 font-15">+14.29</span>
                            </li>
                            <li>
                                <span class="block">Trend</span>
                                <span class="block">
												<i class="zmdi zmdi-trending-up txt-success font-20"></i>
											</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">browser stats</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block mr-15">
                            <i class="zmdi zmdi-download"></i>
                        </a>
                        <a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div>
										<span class="pull-left inline-block capitalize-font txt-dark">
											google chrome
										</span>
                            <span class="label label-warning pull-right">50%</span>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr row mt-10 mb-10"/>
                            <span class="pull-left inline-block capitalize-font txt-dark">
											mozila firefox
										</span>
                            <span class="label label-danger pull-right">10%</span>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr row mt-10 mb-10"/>
                            <span class="pull-left inline-block capitalize-font txt-dark">
											Internet explorer
										</span>
                            <span class="label label-success pull-right">30%</span>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr row mt-10 mb-10"/>
                            <span class="pull-left inline-block capitalize-font txt-dark">
											safari
										</span>
                            <span class="label label-primary pull-right">10%</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Visit by Traffic Types</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block refresh mr-15">
                            <i class="zmdi zmdi-replay"></i>
                        </a>
                        <div class="pull-left inline-block dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div>
                            <canvas id="chart_6" height="191"></canvas>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15"/>
                        <div class="label-chatrs">
                            <div class="">
                                <span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">44.46% organic</span><span class="block txt-grey">356 visits</span></span>
                                <div id="sparkline_1" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15"/>
                        <div class="label-chatrs">
                            <div class="">
                                <span class="clabels clabels-lg inline-block bg-green mr-10 pull-left"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">5.54% Refrral</span><span class="block txt-grey">36 visits</span></span>
                                <div id="sparkline_2" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <hr class="light-grey-hr row mt-10 mb-15"/>
                        <div class="label-chatrs">
                            <div class="">
                                <span class="clabels clabels-lg inline-block bg-yellow mr-10 pull-left"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">50% Other</span><span class="block txt-grey">245 visits</span></span>
                                <div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">social campaigns</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block refresh mr-15">
                            <i class="zmdi zmdi-replay"></i>
                        </a>
                        <a href="#" class="pull-left inline-block full-screen mr-15">
                            <i class="zmdi zmdi-fullscreen"></i>
                        </a>
                        <div class="pull-left inline-block dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>New</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row pa-0">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>Campaign</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Facebook</span></td>
                                        <td>Beavis</td>
                                        <td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>2.43%</span></span></td>
                                        <td>
                                            <span class="txt-dark weight-500">$1478</span>
                                        </td>
                                        <td>
                                            <span class="label label-primary">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Youtube</span></td>
                                        <td>Felix</td>
                                        <td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>1.43%</span></span></td>
                                        <td>
                                            <span class="txt-dark weight-500">$951</span>
                                        </td>
                                        <td>
                                            <span class="label label-danger">Closed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Twitter</span></td>
                                        <td>Cannibus</td>
                                        <td><span class="txt-danger"><i class="zmdi zmdi-caret-down mr-10 font-20"></i><span>-8.43%</span></span></td>
                                        <td>
                                            <span class="txt-dark weight-500">$632</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Spotify</span></td>
                                        <td>Neosoft</td>
                                        <td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>7.43%</span></span></td>
                                        <td>
                                            <span class="txt-dark weight-500">$325</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Instagram</span></td>
                                        <td>Hencework</td>
                                        <td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span>9.43%</span></span></td>
                                        <td>
                                            <span class="txt-dark weight-500">$258</span>
                                        </td>
                                        <td>
                                            <span class="label label-primary">Active</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Advertising & Promotions</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block refresh mr-15">
                            <i class="zmdi zmdi-replay"></i>
                        </a>
                        <div class="pull-left inline-block dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div>
                            <canvas id="chart_2" height="253"></canvas>
                        </div>
                        <div class="label-chatrs mt-30">
                            <div class="inline-block mr-15">
                                <span class="clabels inline-block bg-yellow mr-5"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Active</span>
                            </div>
                            <div class="inline-block mr-15">
                                <span class="clabels inline-block bg-blue mr-5"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Closed</span>
                            </div>
                            <div class="inline-block">
                                <span class="clabels inline-block bg-green mr-5"></span>
                                <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Hold</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
@endsection
<div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#"><span>form</span></a></li>
            <li class="active"><span>form-element</span></li>
        </ol>
    </div>
    <!-- /Breadcrumb -->
</div>
<div class="col-sm-6">
    <div class="panel panel-default card-view">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">Add Categories</h6>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <div class="form-wrap">
                    <form class="form-horizontal" role="form">
                        <div class="form-group has-dark">
                            <div class="col-md-12">
                                <label>Name Category</label>
                                <input type="text" id="state-dark" name="" class="form-control" placeholder="...">
                                <label>Introduce</label>
                                <textarea name="txtContent" class="form-control " id="editor1"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Complex Header</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_2" class="table table-hover table-bordered display mb-30" >
                                <thead>
                                <tr>
                                    <th rowspan="2">Name</th>
                                    <th colspan="2">HR Information</th>
                                    <th colspan="3">Contact</th>
                                </tr>
                                <tr>
                                    <th>Position</th>
                                    <th>Salary</th>
                                    <th>Office</th>
                                    <th>Extn.</th>
                                    <th>E-mail</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Salary</th>
                                    <th>Office</th>
                                    <th>Extn.</th>
                                    <th>E-mail</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>$320,800</td>
                                    <td>Edinburgh</td>
                                    <td>5421</td>
                                    <td>t.nixon@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>$170,750</td>
                                    <td>Tokyo</td>
                                    <td>8422</td>
                                    <td>g.winters@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>$86,000</td>
                                    <td>San Francisco</td>
                                    <td>1562</td>
                                    <td>a.cox@datatables.net</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>$433,060</td>
                                    <td>Edinburgh</td>
                                    <td>6224</td>
                                    <td>c.kelly@datatables.net</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@extends('backend.layout.master')
@section('script')
    <script src="https://hencework.com/theme/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend/dist/js/dataTables-data.js')}}"></script>
@endsection
@section('content')

@endsection
