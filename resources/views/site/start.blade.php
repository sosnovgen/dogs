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
                                <img src="{{asset('images/site/5.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Vivat Brave Master Super Mishka </h3>
                                    <p>Юный Гранд Чемпион Украины, Чемпион России, Чемпион РФСС, Чемпион РФОС, Чемпион ОАНКОО, Чемпион РКФ(на подтверждении),
                                        Лучший Кобель Породы 2017 года, Чемпион Породы 2017 года,</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('images/site/3.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Мальчик фиолетовая</h3>
                                    <p>Мальчик фиолетовая лента из первого помета Baffi и Vivat Brave Master Super Mishka.
                                        Вот такой красавец вырос. Вот такой был. Живёт в Карелии. </p>
                                </div>
                            </li>

                            <li>
                                <img src="{{asset('images/site/mers.jpg')}}" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3>Vivat Brave Master Super Mishka </h3>
                                    <p>Предлагется для вязки роскошный, титулованный кобель
                                        ньюфаундленда Vivat Brave Master Super Mishka импортирован из известного украинкого питомника Super Mishka, имеет хорошую родословную в которой собраны известные крови. </p>
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
            <form role="form" method="GET" action="{{action('FrontController@search')}}" enctype="multipart/form-data">
                <input type="text" name="search" value="Search" onfocus="this.value = '';"
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


    </div>


    <div class="clearfix"></div>


@stop