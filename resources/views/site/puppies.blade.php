@extends('site.main')
@section('content')

    <div class="about">

        <div class="team_grid">
            <h3 class="m_1">Радость-родились щенки</h3>
            @foreach($articles as $article)
                <div class="col-md-6 ab-top">
                    <ul class="span_2">

                        <li class="span_2-left"><a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                                <img src="{{asset($article->preview)}}" class="img-responsive" alt=""></a></li>
                        <li class="span_2-right">
                            <h3>{{$article->title}}</h3>
                            @php($text=strip_tags($article->content))
                            {{$text}}
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
            @endforeach
            <div class="clearfix"></div>

        </div>
    </div>

    <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt="" />
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>

@stop