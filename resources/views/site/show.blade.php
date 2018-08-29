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
            <div class="col-md-3 bann-left">
                <!-- Поиск -->
                <div class="b-search">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </form>
                </div>

                <h3>Предыдущие статьи</h3>
                <div class="blo-top">
                    @php($loop=0)
                    @foreach($posts as $article)
                        @if ($loop >3)
                            <div class="blog-grids">

                                <div class="blog-grid-right">
                                    <h4><i><a href="{{action('FrontController@show',$article->id)}}">{{$article ->title}}</a></i></h4>
                                    @php
                                        $string = $article -> content;
                                        $string = strip_tags($string);
                                        $string = substr($string, 0, 60);
                                        $string = substr($string, 0, strrpos($string, ' '));
                                        $string =  $string."… ";
                                    @endphp

                                    {{$string}}

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @endif
                        @php($loop++)
                    @endforeach
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
