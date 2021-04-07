@extends('Font-end.Layouts.master')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9 col-md-offset-3">
                <div class="posts">
                    <div class="posts-inner" id="article_id">
                        <article class="post" >
                            <div class="post-header">
                                <h2 class="title"><span>
                                        {{$article->name}}
                                    </span></h2>

                                <!-- Post Details -->
                                <div class="post-details">
                                    <div class="post-cat">
                                        <a href="#">{{$article->category->name}}</a>
                                    </div>
                                    <a href="#" class="post-date"><span>{{$article->created_at}}</span></a>
                                </div>
                                <!-- End Post Details -->
                            </div>
                            <div class="post-media">
                                <img src="{{asset('storage/'.$article->image)}}" alt="Post">
                            </div>
                            <div class="the-excerpt">
                                <blockquote>
                                    <p>
                                        {!!  $article->content!!}
                                    </p></blockquote>
                                <ul>
                                    <li>
                                        <strong>Name</strong> {{$article->name}}
                                    </li>
                                    <li>
                                        <strong>Email:</strong> {{$article->gmail}}
                                    </li>
                                </ul>
                            </div>
                            <div class="post-content">
                                <div class="post-tags">
                                    <strong>Tags: </strong>
                                    <ul>
                                        <li><a href="#">Art</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Trip</a></li>
                                        <li><a href="#">Tip</a></li>
                                    </ul>
                                </div>
                                <div class="post-author">
                                    Writed by <a href="#">Kendy</a>
                                </div>
                            </div>

                        </article>
                    </div>

                    <div id="comments">
                        @foreach($comments as $key=>$comment)

                        <div class="comments-inner">
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-head">
                                            <div class="comment-avatar">
                                                <img alt="avatar" src="images/avatar-150px.jpg">
                                            </div>
                                            <div class="comment-info">
                                                <h5 class="title">Kendy</h5>
                                                <span class="comment-date">{{$comment->created_at}}</span>
                                            </div>
                                        </div>
                                        <div class="comment-context">
                                            <p>
                                                {{$comment->content}}
                                            </p> <p>
                                                {{$comment->name}}
                                            </p>
                                            <div class="reply">
                                                <span class="comment-reply"><a class="comment-reply-link"
                                                                               href="#">Reply</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endforeach

                        </div>

                        <!-- Respond -->
                        <div id="respond" class="comment-respond">
                            <h2 class="title"><span>Leave a Reply</span></h2>
                            <form action="{{route('comment.store',$article->id)}}" method="POST" class="contact">
                                <input name="article_id" value="{{$article->id}}" type="hidden" placeholder="Your Name *">
                                @csrf
                                <div class="contact-item">
                                    <label>Your Name *</label>
                                    <input name="name" value="" type="text">
                                </div>

                                <div class="contact-item">
                                    <label>Your Comment *</label>
                                    <textarea name="content"></textarea>
                                </div>
                                <div class="contact-item form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                </div>
                            </form>
                        </div><!-- #respond -->
                        <!-- End Respond -->
                    </div>
                    <!-- End Comments -->
                </div>
            </div>
        </div>
    </div>
@endsection
