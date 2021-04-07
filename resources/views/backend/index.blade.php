@extends('backend.layout.master')
@section('script')
    <script src="{{asset('backend/dist/js/dashboard-data.js')}}"></script>

@endsection
@include('backend.layout.backup')
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
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h4><b>List Article</b></h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="media">
                        @foreach($articles as $article)
                            <a class="pull-left" href="#" style="padding-right: 10px">
                                <img style="width: 100px" class="media-object" src="{{asset('storage/'.$article->image)}}">
                            </a>
                            <div class="media-body">
                                <ul class="list-inline list-unstyled" >

                                    <li><h4 class="media-heading">{{$article->category->name}}</h4></li>
                                    <li>|</li>
                                    <li><h4 class="media-heading">{{$article->name}}</h4></li>

                                </ul>
                                <p>{!! $article->content !!}</p>
                                <ul class="list-inline list-unstyled">
                                    <li><span><i class="glyphicon glyphicon-calendar"></i> {{$article->created_at}} </span></li>
                                    <li>|</li>
                                    <span><i class="glyphicon glyphicon-comment"></i>
                                {!!$article->comments_count!!}
                        </span>
                                    <li>|</li>

                                    <li>|</li>
                                    <li>
                                        <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                        <span><i class="fa fa-facebook-square"></i></span>
                                        <span><i class="fa fa-twitter-square"></i></span>
                                        <span><i class="fa fa-google-plus-square"></i></span>
                                    </li>

                                </ul>
                                <ul>
                                    <li>{{$article->gmail}}</li>
                                </ul>
                            </div>
                            <hr style="border: 3px solid black;">
                        @endforeach
                            <div style="float: right;margin-right: 10px">{{ $articles->links('pagination::bootstrap-4') }}</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h7 class="panel-title txt-dark">Panel with table</h7>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row pa-0">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$category->name}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="float: right;margin-right: 8px">{{ $categories->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>    </div>

    <!-- Row -->
@endsection


