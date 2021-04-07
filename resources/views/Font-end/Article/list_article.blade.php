@extends('Font-end.Layouts.master')
@section('content')
    <div class="col-md-9 col-md-offset-3">
        <div class="posts">
            <div class="posts-inner grid-layout">
                @foreach($articles as $article)
                    <article class="post">
                        <div class="post-header">
                            <h2 class="title">
                                <a href="single.html">{{$article->name}}</a>
                            </h2>

                            <!-- Post Details -->
                            <div class="post-details">
                                <div class="post-cat">
                                    <a href="#">{{$article->category->name}}</a>
                                </div>
                                <a href="#" class="post-date"><span>{{$article->created_at}}</span></a>
                                <div class="post-details-child">
                                    <a href="#" class="post-views">15</a>

                                    <a href="#" class="post-comments">
                                        {{$article->comments_count}}
                                    </a>
                                    <div class="post-share-icon">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i><span>Google Plus</span></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i><span>Behance</span></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Details -->
                        </div>
                        <div class="post-media">
                            <a href="{{route('article.detail',$article->id)}}">
                                <img src="{{asset('storage/'.$article->image)}}" alt="Post">
                            </a>
                        </div>
                        <div class="post-content">

                            <!-- The Content -->
                            <div class="the-excerpt">
                                <p>

                                    {!!  $article->content!!}
                                </p>
                            </div>
                            <!-- End The Content -->
                        </div>

                        <div class="read-more">
                            <a href="single.html">Continue Reading ...</a>
                        </div>


                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-wrap">

                <div class="older">
                    <a href="#">Older Posts <i class="fa fa-angle-double-right"></i></a>
                </div>
                <div class="newer">
                    <a href="#"><i class="fa fa-angle-double-left"></i> Newer Posts</a>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>

@endsection
