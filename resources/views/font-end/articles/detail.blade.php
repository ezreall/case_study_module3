@extends('font-end.layouts.index')
@section('content')

    <div class="col-md-9 col-md-offset-3">
        <div class="projects">
            <div class="header-text" id="article_id">
                <span><b>{{$article->category->name}}</b></span>
                <blockquote>
                    <p>
                        {!! $article->content !!}
                    </p>
                    <ul>
                        <li>
                            <strong>Name</strong> {{$article->name}}
                        </li>
                        <li>
                            <strong>Email:</strong> {{$article->gmail}}
                        </li>
                    </ul>
                </blockquote>

            </div>
            <div class="tiled-gallery">
                <div class="project-item">
                    <a href="">
                        <img src="{{asset('storage/'.$article->image)}}">
                    </a>
                    <h2 class="title">
                        <a href="#">Emotions</a>
                    </h2>
                </div>
            </div>
            <div class="card-body">
                <div class="card mb-3">
                    <div class="card-body">
                        <hr/>
                        <div class="likes text-right" data-post-id="">
                            <a href="#" class="like">
                                <i class="fa fa-thumbs-up"></i> <span class="count"></span>
                            </a>
                            <a href="#" class="dislike">
                                <i class="fa fa-thumbs-down"></i> <span class="count"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-text">
                @foreach($comments as $key=>$comment)
                    <p>
                        {{$comment->content}}
                    </p>
                    <ul>
                        <li>
                            <strong>Name</strong>{{$comment->name}}
                        </li>
                    </ul>
                @endforeach
            </div>
            <form action="{{route('comment.store',$article->id)}}" method="POST" class="comment-form contact">
                @csrf
                <div class="contact-item form-name">
                    <input name="name" value="" type="text" placeholder="Your Name *">
                </div>
                <input name="article_id" value="{{$article->id}}" type="hidden" placeholder="Your Name *">
                <div class="contact-item field-full form-message">
                    <textarea name="content" placeholder="Message *"></textarea>
                </div>
                <div class="contact-item form-submit">
                    <input name="submit" type="submit" id="submit" class="submit" value="POST Comment">
                </div>
            </form>
        </div>

@endsection

