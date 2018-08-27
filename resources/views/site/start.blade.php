@extends('site.main')
@section('content')

    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });

    </script>

    <div class="col-md-9 bann-right">
        <!-- banner -->
        <div class="banner">
            <div class="header-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="{{asset('images/site/1.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Юный Гранд Чемпион Украины</h3>
                                    <p>Предлагется для вязки роскошный, титулованный кобель ньюфаундленда
                                        Vivat Brave Master Super Mishka импортирован из известного украинкого питомника
                                        Super Mishka, имеет хорошую родословную в которой собраны известные крови. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/site/2.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Curabitur et ligula. Ut molestie </h3>
                                    <p>Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.
                                        Ut molestie a, ultricies porta urna. Vestibulu. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/site/5.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Etiam ullamcorper. Suspendisse</h3>
                                    <p>Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis,
                                        malesuada ultricies. Curabitur et ligula. </p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/site/6.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Suspendisse a pellentesque dui</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada
                                        elit lectus felis, malesuada .</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- banner -->

        <!-- 4 картинки под каруселью -->
        <!-- Переменная цикла -->
        @php ($loop = 1)

        <div class="nam-matis">
            @foreach($articles as $article)
                <div class="nam-matis-top">
                    @if (($loop == 1) or ($loop == 3))
                        <div class="col-md-6 nam-matis-1">
                            <a href="{{action('FrontController@show',$article->id)}}"><img src="{{asset($article->preview)}}" class="img-responsive" alt=""></a>
                            <h3><a href="{{action('FrontController@show',$article->id)}}">{{$article ->title}}</a></h3>

                            @php
                                    $string = $article -> content;
                                    $string = strip_tags($string);
                                    $string = substr($string, 0, 200);
                                    $string = substr($string, 0, strrpos($string, ' '));
                                    $string =  $string."… ";
                            @endphp

                            <p>  {{$string}} </p>

                        </div>
                    @endif

                    @if (($loop == 2) or ($loop == 4))
                        <div class="col-md-6 nam-matis-1">
                            <a href="{{action('FrontController@show',$article->id)}}"><img src="{{asset($article->preview)}}" class="img-responsive" alt=""></a>
                            <h3><a href="{{action('FrontController@show',$article->id)}}">{{$article ->title}}</a></h3>

                            @php
                                $string = $article -> content;
                                $string = strip_tags($string);
                                $string = substr($string, 0, 200);
                                $string = substr($string, 0, strrpos($string, ' '));
                                $string =  $string."… ";
                            @endphp

                            <p>  {{$string}} </p>

                        </div>
                        <div class="clearfix"></div>
                    @endif
                </div>
                @php ($loop++)
            @endforeach
        </div>
        <!-- 4 картинки под каруселью -->

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
            @foreach($articles as $article)
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


    <div class="clearfix"></div>
    <div class="fle-xsel">
        <ul id="flexiselDemo3">
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{asset('images/site/4.jpg')}}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{asset('images/site/5.jpg')}}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{asset('images/site/1.jpg')}}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{asset('images/site/3.jpg')}}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{asset('images/site/6.jpg')}}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="{{asset('images/site/1.jpg')}}" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
        </ul>

        <script type="text/javascript">
            $(window).load(function () {

                $("#flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
        <div class="clearfix"></div>
    </div>

@stop