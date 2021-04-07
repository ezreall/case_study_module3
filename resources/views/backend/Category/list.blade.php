@extends('backend.layout.master')
@section('script')
    <script src="https://hencework.com/theme/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend/dist/js/dataTables-data.js')}}"></script>
@endsection
@section('content')

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
    <div class="row">
        <div class="col-sm-11">
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
                                        user statistics
                                    </tr>
                                    <tr>
                                        <th>Introduce</th>
                                        <th style="text-align: center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>

                                    <tbody>
                                    @foreach($categories as $key=>$category)

                                        <tr>
                                            <td>{!! $category->name !!}</td>
                                            <td>{!!   substr($category['introduce'], 0, 120) !!} <a href="">...</a>  </td>
                                            <td style="text-align: center">
                                                <a href="{{route('edit.category',['id'=>$category->id])}}" class="btn btn-default btn-anim">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    <span class="btn-text">edit</span>
                                                </a>
                                                <a href="{{route('delete.category',$category->id)}}" class="btn btn-danger btn-anim"><i  class="fa fa-trash-o"></i>
                                                    <span class="btn-text" >
                                                       delete
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
