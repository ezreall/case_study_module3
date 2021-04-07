@extends('backend.layout.master')
@section('content')

    @include('backend.layout.backup')
    <div class="container">
        <div class="well">
            @foreach($articles as $key=>$article)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img style="width: 100px" class="media-object" src="{{asset('storage/'.$article->image)}}">
                    </a>
                    <div class="media-body">
                        <ul class="list-inline list-unstyled" style="margin-left: 10px">

                            <li><h4 class="media-heading">{{$article->category->name}}</h4></li>
                            <li>|</li>
                            <li><h4 class="media-heading">{{$article->name}}</h4></li>

                        </ul>
                        <p>{!!  substr($article['content'], 0, 500)!!}<a href="">...</a></p>
                        <li>{{$article->gmail}}</li>

                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-calendar"></i> {{$article->created_at}} </span></li>
                            <li>|</li>
                            <span><i class="glyphicon glyphicon-comment"></i>
                                {!!$article->comments_count!!}
                        </span>
                            <li>|</li>
{{--                            @foreach($article->tags as $tag)--}}
{{--                                <label class="label label-info">{{ $tag->tags}}</label>--}}
{{--                            @endforeach--}}
                            <li>|</li>

                            <div style="float: right">
                                <a href="{{route('edit',['id'=>$article->id])}}" class="btn btn-default btn-icon-anim "><i
                                        class="fa fa-pencil"></i></a>
                                <a href="{{route('delete',$article->id)}}" class="btn btn-danger btn-icon-anim "><i
                                        class="icon-trash"></i></a>
                            </div>
                        </ul>

                        <ul>
                        </ul>
                    </div>
                </div>
                <hr style="border: 3px solid black;">
            @endforeach

        </div>

    </div>
@endsection
