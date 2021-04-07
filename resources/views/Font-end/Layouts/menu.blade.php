<div class="col-md-3">
    <div class="header affix">
        <div class="table">
            <div class="table-cell">
                <!-- Logo -->
                <div class="logo">
                    <a href="index-2.html">
                        <img src="images/logo-light.png" alt="Logo" class="logo-light">
                        <img src="images/logo.png" alt="Logo">
                    </a>
                </div>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="main-menu">
                    <nav>
                        <ul class="menu-list">
                            <li class="menu-item-has-children">
                                <a href="index-2.html">Home</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index-2.html">Standard Layout</a>
                                    </li>
                                    <li>
                                        <a href="index-grid.html">Grid Layout</a>
                                    </li>
                                    <li>
                                        <a href="index-grid-1st-large.html">Grid 1st Large</a>
                                    </li>
                                    <li>
                                        <a href="index-list.html">List Layout</a>
                                    </li>
                                    <li>
                                        <a href="index-list-1st-large.html">List 1st Large</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                            </li>
                            <li>
                                <a href="#">Travel</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="single.html">Single</a>
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
                <!-- End Socials -->

                <div class="box-search">
                    <form role="search" method="get" action="#">
                        <input type="text" placeholder="Search ..." name="s" />
                    </form>
                </div>

                <div class="copyright">
                    <p>
                        Tancho @ 2018. Design by <a href="#">Kendy</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
