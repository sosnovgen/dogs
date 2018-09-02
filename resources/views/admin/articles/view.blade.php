@extends('admin.main')
@section('content')

        <button type="button" class="close" onclick="location.href='{{asset('/')}}'">&times;</button>

        <input type="hidden" name="width" id="_size">

        <div class="row" >
            <div class="col-md-9">
                <h3 class="text-left">Статьи</h3>
                <a class="pull-right"  href="{{action('ArticlesController@create')}}" ><i class="fa fa-plus" aria-hidden="true" style="font-size: 1.2em;"> Новая статья</i></a>
            </div>
            <div class="col-md-3">
                <div class="cat-select-over">
                <div class="cat-select">
                <label for="group_id">Выбрать группу</label>
                <select onchange="window.location.href=this.options[this.selectedIndex].value" name="group_id" class="form-control" id="select_cat" onfocus='this.size=12;' onchange='this.size=1;' onblur='this.size=1;'>
                    <option value="{{action('ArticlesController@index')}}" >Все</option>

                    @foreach($groups as $group)

                        <option value="{{action('ArticlesController@indexid',['id'=>$group->id])}}"
                                @if(($articles->count() >0)&&($sort == 1))
                                    @if   ($articles ->first()->group->title == $group->title)
                                        selected
                                    @endif
                                @endif
                        >{{$group->title}}</option>

                    @endforeach
                    @if(!($articles->count() >0))
                        <option value="" selected>--</option>
                    @endif

                </select>
                </div>
                </div>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-condensed table-striped" id="token-keeper2" data-token="{{ csrf_token() }}">
                <thead>
                <tr>
                    <th>id</th>
                    <th class="td-1">Картинка</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Группа</th>
                    <th class="td-1">Изменён</th>
                    <th>Действие</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        @if ($article->preview == 'none')
                            <td class="td-1"><i class="fa fa-ban" aria-hidden="true"
                                                style=
                                                "font-size: 1.4em;
                                                color:#b92c28;
                                                padding: 2px 0 0 8px;
                                                "></i></td>
                        @else
                            <?php
                            $fileName = ($article -> preview);
                            $fileName = mb_substr($fileName,1);

                            ?>
                            @if(is_file($fileName))
                                <td class="td-1"><img width=30 height=30 src="{{asset($article->preview)}}"></td>
                            @else
                                <td class="td-1"><i class="fa fa-eraser" aria-hidden="true" style="
                                font-size: 1.4em;
                                color:#2c72e6;
                                padding: 2px 0 0 8px;
                                "></i></td>
                            @endif
                        @endif

                        <td class="td-2">{{$article->title}}</td>
                        <td class="td-1">{{$article->category->title}}</td>
                        <td class="td-2">{{$article->group->title}}</td>

                        <td class="td-1" style="width: 8em;">{{$article->updated_at->format('d-m-Y')}}</td>
                        <td>
                            <a href="{{action('ArticlesController@edit',['id'=>$article->id])}}"><i class="fa fa-pencil" aria-hidden="true" style="font-size: 1.2em; "></i></a>

                            <a class="article_link" href="{{$article->id}}" ><i class="fa fa-trash" aria-hidden="true" style="font-size: 1.2em"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{--begin of pagination--}}
        <div style="width: 50%; margin: 0 auto; text-align: center"> {!! $links !!} </div>
        {{--end of pagination--}}

       <br><br>

        @if(Session::has('message'))
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> {{Session::get('message')}}.
            </div>
        @endif

    <br>

@stop