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
                        <li>
                            <a href="{{route('edit',['id'=>$article->id])}}" class="btn btn-default btn-icon-anim "><i class="fa fa-pencil"></i></a>
                            <a href="{{route('delete',$article->id)}}" class="btn btn-danger btn-icon-anim "><i class="icon-trash"></i></a>
                        </li>
                    </ul>
                    <ul>
                        <li>{{$article->gmail}}</li>
                    </ul>
                </div>

            </div>
                <hr style="border: 3px solid black;">
            @endforeach

        </div>

    </div>
@endsection
