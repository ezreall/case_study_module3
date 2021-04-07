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
    <form action="{{route('store.articles')}}" method="POST" enctype="multipart/form-data">
        <input name="admin_id"  type="hidden" placeholder="Your Name *">
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
                                        <input value="{{old('name')}}" type="text" class="form-control @error('name') border-danger  @enderror" name="name" >
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                    <textarea  name="content" class="form-control @error('content') border-danger  @enderror " id="editor1"> </textarea>
                                        @error('content')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
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
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Gmail <span
                                            class="help"></span></label>
                                    <input value="{{old('gmail')}}" type="text" id="frm02--email" class="form-control @error('gmail') border-danger  @enderror"
                                           placeholder="......@Gmail.com" name="gmail">
                                    @error('gmail')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-30">
                                    <label class="control-label mb-10 text-left">File upload</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i
                                                class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span
                                                class="fileinput-exists btn-text">Change</span>
                                            <input type="hidden"><input type="file" name="image">
                                        </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists"
                                                                   data-dismiss="fileinput"><i
                                                class="fa fa-trash"></i><span class="btn-text"> Remove</span></a>
                                    </div>

                                    <div class="form-group ">
                                        <label for="Tags">Tags:</label>
                                        <div></div>
                                        <input type="text" data-role="tagsinput" class="form-control" name="tags">
                                    </div>
                            </div>
                            </div>

                        </div>
                    </div>

                </div>
            <button type="submit" class="btn btn-default btn-anim"><i class="fa fa-shopping-cart"></i><span
                    class="btn-text">add to cart</span></button>
            <button type="submit" class="btn btn-danger btn-anim"><i class="icon-trash"></i><span
                    class="btn-text">Can</span></button>
    </form>

@endsection

