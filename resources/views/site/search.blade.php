@extends('site.main')
@section('content')

    <h3 class="text-center">Результат поиска <span style="font-size: 0.8em; color: green">"{{$query}}"</span></h3>
    @foreach ($articles as $article)
        <div class="container">
            <div class="row">
               <div class="search_st">
                <div class="col-md-2 ">
                    <a href="{{action('FrontController@show',$article->id)}}"><img src="{{asset($article->preview)}}"
                                                                                   class="img-responsive"
                                                                                   style="width: 128px; height:auto; "
                                                                                   alt=""></a>
                </div>

                <div class="col-md-10 ">
                    <h3><a href="{{action('FrontController@show',$article->id)}}">{{$article ->title}}</a></h3>

                    @php
                        $string = $article -> content;
                        $string = strip_tags($string);
                        $string = substr($string, 0, 100);
                        $string = substr($string, 0, strrpos($string, ' '));
                        $string =  $string."… ";
                    @endphp

                    <p>  {{$string}} </p>

                </div>
               </div>
            </div>
            <div class="clearfix"></div>
        </div>

    @endforeach


@stop