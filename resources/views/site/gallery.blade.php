@extends('site.main')
@section('content')

    <br>
    <h3 class="text-center text-capitalize">Наши собаки</h3>
    <br>
        @foreach($articles as $article)
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="{{asset($article->preview)}}" title="{{$article->title}}" alt="...">
                </a>
            </div>
        @endforeach


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

    <br>
    {{--begin of pagination--}}
    <div style="width: 50%; margin: 0 auto; text-align: center"> {!! $links !!} </div>
    {{--end of pagination--}}

    <br>

    <script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>

@stop
