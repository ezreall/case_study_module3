@extends('user.index')
@section('content')
<div class="col-md-9 col-md-offset-3">
    <div class="projects">
        @foreach($articles as $key=>$article)

        <div class="header-text">
                <span><b>{{$article->name_articles}}</b></span>
            <br>
            <span><b>{{$article->category->name_categories}}</b></span>
            <blockquote>
                <p>
                    {!! $article->content_articles !!}
                </p>
                <ul>
                    <li>
                        <strong>Name</strong> {{$article->name_articles}}
                    </li>
                    <li>
                        <strong>Email:</strong> {{$article->gmail_articles}}
                    </li>
                </ul>
            </blockquote>

        </div>
        <div class="tiled-gallery">
            <div class="project-item">
                <a href="{{route('article.detail',$article->id)}}">
                    <img src="{{asset('storage/'.$article->image_articles)}}" >
                </a>
                <h2 class="title">
                    <a href="#">Emotions</a>
                </h2>
            </div>
        </div>
        @endforeach

    </div>
@endsection
