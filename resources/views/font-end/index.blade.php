@extends('font-end.layouts.index')
@section('content')
    @foreach($articles as $key=>$article)
    <div class="col-md-9 col-md-offset-3">
        <div class="projects">
            <div class="tiled-gallery">
                <div class="project-item">
                    <a href="{{route('article.detail',$article->id)}}">
                        <img src="{{asset('storage/'.$article->image)}}" alt="">
                    </a>
                    <h2 class="title">
                        <a href="">{{$article->name}}</a>
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
