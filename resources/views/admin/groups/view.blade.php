@extends('admin.main')
@section('content')

        <div class="row">
            <div class="col-md-9">
                <button type="button" class="close" onclick="location.href='{{asset('admin')}}'">&times;</button>
                <div class="row capture">
                    <h3 class="text-center">Группа</h3>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-condensed table-striped" id="token-keeper3" data-token="{{ csrf_token() }}">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Название</th>
                            <th>Изменён</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($groups as $group)
                            <tr>
                                <td>{{$group->id}}</td>
                                <td>{{$group->title}}</td>
                                <td>{{$group->updated_at->format('d-m-Y')}}</td>
                                <td>&nbsp;
                                    <a class="group_link" href="{{$group->id}}" ><i class="fa fa-trash" aria-hidden="true" style="font-size: 1.2em"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a class="pull-right" data-toggle="modal" href="#myModal" ><i class="fa fa-plus" aria-hidden="true" style="font-size: 1.4em; color:#b92c28"></i></a>
                    </div>
                </div>

                <br><br>

                @if(Session::has('message'))
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> {{Session::get('message')}}.
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <br>
                <div class="description small">
                    <p>* Здесь можно добавить ли отредактировать группу статьи.</p>
                    <p>* Группа: "блог" - стартовая страница </p>
                    <p>* Группа: "видео" - страница "Наше видео" </p>
                    <p>* Группа: "фото" - страница "Наши собаки" </p>
                    <p>* Группа: "щенки" - страница "Щенки" </p>
                    <p>* Группа: "ссв" - страница "Спасение на воде" </p>
                    <p>* Группа: "о нас" - страница "О нас" </p>

                </div>
            </div>

        </div>

    <!-- Modal Groups Create -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Создать группу</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form method="POST" action="{{action('GroupsController@store')}}" class="form-group" enctype="multipart/form-data"/>
                        <div class="col-md-4">
                            <label for="ex5">Название Группы</label>
                            <input class="form-control" name="title" id="ex5" type="text">
                            <br>

                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        </div>
                    </div>
                </div>
                <br>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Сохранить</button>
                </div>
                </form>

            </div>

        </div>
    </div>



@stop