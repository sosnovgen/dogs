@extends('site.main')
@section('content')

    <br>
    <div class="container">
        @foreach($articles as $article)
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img src="{{asset($article->preview)}}"
                         alt="...">
                </a>
            </div>
        @endforeach

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
