<div class="col-md-3">
    <div class="header affix">
        <div class="table">
            <div class="table-cell">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{route('home')}}">Kelly</a>
                </div>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="main-menu">
                    <nav>
                        <ul class="menu-list">
                            <li class="active menu-item-has-children">
                                <a href="index-2.html">Home</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="">List Post</a>
                                    </li>
                                    <li>
                                        <a href="index-3.html">Tiled Layout</a>
                                    </li>
                                    <li>
                                        <a href="index-header-text.html">Header Text</a>
                                    </li>
                                    <li>
                                        <a href="index-menu-right.html">Menu Right</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li>
                                        @foreach($category as $key)
                                            <a href="{{route('category_articles',$key->id)}}">
                                            <ul>{{$key->name}}</ul></a>
                                        @endforeach
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Navigation -->

                <!-- Socials -->
                <div class="socials">
                    <a href="#" title="Behance">
                        <i class="fa fa-behance"></i>
                    </a>
                    <a href="#" title="Dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <a href="#" title="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" title="Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="#" title="Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" title="Search this site">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="box-search">
                    <div class="table">
                        <div class="table-cell">
                            <div class="container">
                                <form class="search-form" action="#" method="get">
                                    <input type="search" name="s" class="search-field" placeholder="Type &amp; hit enter" value="" title="Search">
                                    <div class="kd-close">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Socials -->

                <div class="copyright">
                    <p>
                        Kelly @ 2018. Design by Kelly
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
