@extends('site.main')
@section('content')

    <div class="content-top">

        <div class="single">
            <div class="single-top">
                <img src="{{asset($articles -> preview)}}" class="img-responsive" alt="">

                <p> {!! $articles -> content !!} </p>

                <div class="artical-links">
                    <ul>
                        <li><small> </small><span>june 14, 2013</span></li>
                        <li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
                        <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
                        <li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
                        <li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
                    </ul>
                </div>

            </div>
            <div class="blog-content-right">
                <div class="b-search">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </form>
                </div>

                <h3>Recent Posts</h3>
                <div class="blo-top">
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="single.html"><img src="{{asset('images/site/1b.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">
                            <h4><a href="single.html">Little Invaders </a></h4>
                            <p>pellentesque dui, non felis. Maecenas male </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="single.html"><img src="{{asset('images/site/2b.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">
                            <h4><a href="single.html">Little Invaders </a></h4>
                            <p>pellentesque dui, non felis. Maecenas male </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href=""><img src="{{asset('images/site/3b.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="blog-grid-right">
                            <h4><a href="single.html">Little Invaders </a></h4>
                            <p>pellentesque dui, non felis. Maecenas male </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <h3>Categories</h3>
                <div class="blo-top">
                    <li><a href="#">|| Lorem Ipsum passage</a></li>
                    <li><a href="#">|| Finibus Bonorum et</a></li>
                    <li><a href="#">|| Treatise on the theory</a></li>
                    <li><a href="#">|| Characteristic words</a></li>
                    <li><a href="#">|| combined with a handful</a></li>
                    <li><a href="#">|| which looks reasonable</a></li>
                </div>
                <h3>Newsletter</h3>

                <div class="blo-top">
                    <div class="name">
                        <form>
                            <input type="text" placeholder="email" required="">
                        </form>
                    </div>
                    <div class="button">
                        <form>
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@stop
