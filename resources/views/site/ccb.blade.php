@extends('site.main')
@section('content')


    <br>
    <h3 class="text-center ">Служба спасения на воде</h3>
    <h4 class="text-center ">(Наши тренировки и достижения)</h4>
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


@stop
