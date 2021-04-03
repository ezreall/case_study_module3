@extends('backend.layout.master')
@section('script')

@endsection
@section('content')
    <div class="panel-heading">

        <div class="pull-left">
            <h6 class="panel-title txt-dark">Add Articles</h6>
        </div>
        <div class="clearfix"></div>
    </div>
    <form action="{{route('update',$articles->id)}}" method="POST" enctype="multipart/form-data">

        <div class="row">
            @csrf
            <div class="col-sm-6">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form>
                                    <div class="form-group mt-30 mb-30">
                                        <label class="control-label mb-10 text-left">Select categories</label>
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $key=>$category)
                                                <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left">Name Articles <span
                                                class="help"> </span></label>
                                        <input type="text" class="form-control" name="name" value="{{$articles->name}}" >
                                    </div>
                                    <textarea name="content" class="form-control " id="editor1">{!! $articles->content !!}</textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">User Name <span
                                            class="help"></span></label>
                                    <input type="text" class="form-control" name="username" value="{{$articles->username}}">
                                </div>
                                <input type="email" id="frm02--email" class="form-control"
                                       placeholder="......@Gmail.com" name="gmail" value="{{$articles->gmail}}">
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 text-left">File upload</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                        <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i
                                                class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span
                                                class="fileinput-exists btn-text">Change</span>
														<input type="hidden"><input type="file" name="image">
														</span> <a href="#"
                                                                   class="input-group-addon btn btn-danger btn-anim fileinput-exists"
                                                                   data-dismiss="fileinput"><i
                                                class="fa fa-trash"></i><span class="btn-text"> Remove</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


            <button type="submit" class="btn btn-default btn-anim"><i class="fa fa-shopping-cart"></i><span
                    class="btn-text">Update</span></button>
            <button type="submit" class="btn btn-danger btn-anim"><i class="icon-trash"></i><span
                    class="btn-text">Can</span></button>


        </div>
    </form>

@endsection

