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

    <div class="col-sm-9">
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
                        <form class="form-horizontal" role="form" action="{{route('store.categories')}}"  method="POST">
                            @csrf
                            <div class="form-group has-dark">
                                <div class="col-md-12">
                                    <label>Name Category</label>
                                    <input type="text" id="state-dark" name="name" class="form-control" placeholder="...">
                                    <label>Introduce</label>
                                    <textarea name="introduce" class="form-control " id="editor1"></textarea>
                                    <button type="submit" class="btn btn-default btn-anim"><i class="fa fa-shopping-cart"></i><span class="btn-text">add to cart</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

