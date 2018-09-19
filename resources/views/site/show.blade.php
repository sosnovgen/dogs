@extends('site.main')
@section('content')

    <div class="content-top">

        <div class="single">
            <div class="single-top">
                <img src="{{asset($articles -> preview)}}" class="img-responsive" alt="">

                <p> {!! $articles -> content !!} </p>



            </div>
            <div class="col-md-3 bann-left">
                <!-- Поиск -->
                <div class="b-search">
                    <form role="form" method="GET" action="{{action('FrontController@search')}}"
                          enctype="multipart/form-data">
                        <input type="text" name="search" value="Search" onfocus="this.value = '';"
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
                                    <h4>
                                        <i><a href="{{action('FrontController@show',$article->id)}}">{{$article ->title}}</a></i>
                                    </h4>
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
        </div>
    </div>

@stop
