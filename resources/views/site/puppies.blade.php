@extends('site.main')
@section('content')

    <div class="about">
        <div class="team_grid">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th><h3 style="text-align:center;">Щенки</h3></th>
                        <th><h3 style="text-align:center;">Взрослые</h3></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($articles as $article)
                        @php($num = (int) $article->category->title)

                        @if (($num % 2) <> 0)
                            <tr>
                                <td>
                                    <ul class="span_2">
                                        <li class="span_2-left"><a href="#" class="thumbnail" data-toggle="modal"
                                                                   data-target="#lightbox">
                                                <img src="{{asset($article->preview)}}" class="img-responsive"
                                                     alt=""></a></li>
                                        <li class="span_2-right">
                                            <h4 style="color:#3c3c3c; font-weight: 600; font-size: medium">{{$article->title}}</h4>
                                            @php($text=strip_tags($article->content))
                                            {{$text}}
                                        </li>
                                        <div class="clearfix"></div>
                                    </ul>

                                </td>
                                @endif

                                @if (($num % 2)== 0)
                                    <td>
                                        <ul class="span_2">
                                            <li class="span_2-left"><a href="#" class="thumbnail" data-toggle="modal"
                                                                       data-target="#lightbox">
                                                    <img src="{{asset($article->preview)}}" class="img-responsive"
                                                         alt=""></a></li>
                                            <li class="span_2-right">
                                                <h4 style="color:#3c3c3c; font-weight: 600; font-size: medium">{{$article->title}}</h4>
                                                @php($text=strip_tags($article->content))
                                                {{$text}}
                                            </li>
                                            <div class="clearfix"></div>
                                        </ul>

                                    </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>


            <div class="clearfix"></div>

        </div>
    </div>

    <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt=""/>
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