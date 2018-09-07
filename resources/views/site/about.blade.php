@extends('site.main')
@section('content')


    <div class="about">
        <h3 class="m_1" style="font-weight: 800">О нас</h3>
        <br>
        <!-- Переменная цикла -->
        @php ($loop = 1)
        @foreach($articles as $article)
            @if ($loop == 1)
                <div class="about-top">
                    <div class="col-md-6 ab-top">
                        <a href="{{action('FrontController@show',$article->id)}}"><img
                                    src="{{asset($article->preview)}}" class="img-responsive" alt=""></a>
                    </div>
                    <div class="col-md-6">
                        <h4><a style="color:#3c3c3c; font-weight: 600"
                               href="{{action('FrontController@show',$article->id)}}">{{$article ->title}}</a></h4>

                        @php
                            $string = $article -> content;
                            $string = strip_tags($string);
                            $string = substr($string, 0, 800);
                            $string = substr($string, 0, strrpos($string, ' '));
                            $string =  $string."… ";
                        @endphp

                        {{ $string }}

                    </div>
                    <div class="clearfix"></div>

                </div>
            @else

                <div class="col-md-6 ab-top">
                    <ul class="span_2">

                        <li class="span_2-left"><a href="{{action('FrontController@show',$article->id)}}" class="thumbnail">
                                <img src="{{asset($article->preview)}}" class="img-responsive" alt=""></a></li>
                        <li class="span_2-right">
                            <h4><a style="color:#3c3c3c; font-weight: 600; font-size: medium"
                                   href="{{action('FrontController@show',$article->id)}}">{{$article ->title}}</a></h4>

                            @php
                                $string = $article -> content;
                                $string = strip_tags($string);
                                $string = substr($string, 0, 200);
                                $string = substr($string, 0, strrpos($string, ' '));
                                $string =  $string."… ";
                            @endphp

                            {{ $string }}
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
            @endif

            @php ($loop++)
        @endforeach
        <div class="clearfix"></div>

        <br>
        {{--begin of pagination--}}
        <div style="width: 50%; margin: 0 auto; text-align: center"> {!! $links !!} </div>
        {{--end of pagination--}}

        <br>
@stop