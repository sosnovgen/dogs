@extends('site.main')
@section('content')

    <br>
    <h3 class="text-center ">Наше видео</h3>
    <br>
    <div class="container">
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-xs-6 col-sm-3">
                <div class="media">
                    <div class="media-body">

                        <div class="adaptive-wrap">
                            <iframe src="{{strip_tags($article->content)}}" frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <br>

    {{--begin of pagination--}}
    <div style="width: 50%; margin: 0 auto; text-align: center"> {!! $links !!} </div>
    {{--end of pagination--}}

    <br>

@stop
