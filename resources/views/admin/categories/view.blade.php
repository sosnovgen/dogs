@extends('admin.main')
@section('content')

        <div class="row">
            <div class="col-md-9">
                <button type="button" class="close" onclick="location.href='{{asset('admin')}}'">&times;</button>
                <div class="row capture">
                    <h3 class="text-center">Категория</h3>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-condensed table-striped" id="token-keeper4" data-token="{{ csrf_token() }}">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Название</th>
                            <th>Изменён</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->updated_at->format('d-m-Y')}}</td>
                                <td>&nbsp;
                                    <a class="category_link" href="{{$category->id}}" ><i class="fa fa-trash" aria-hidden="true" style="font-size: 1.2em"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a class="pull-right" data-toggle="modal" href="#myModal2" ><i class="fa fa-plus" aria-hidden="true" style="font-size: 1.4em; color:#b92c28"></i></a>
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
                    <p>* Категория - параметр, который используется только для раздела "Щенки".</p>
                    <p>* При заполнении и редактировании сайта нужно придерживаться следующего правила: щенки должны иметь
                        нечетную категорию (например: 1,3,5,...9), взрослые - чётную категорию (2,4,..10).</p>
                    <p>* Для правильного отбражения страницы "Щенки" нужно придерживаться связки: щенок-взрослый
                        (категории 1-2, 3-4,...7-8).
                    </p>

                </div>
            </div>

        </div>


    <!-- Modal Groups Create -->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Создать категорию</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form method="POST" action="{{action('CategoriesController@store')}}" class="form-group" enctype="multipart/form-data"/>
                        <div class="col-md-4">
                            <label for="ex5">Название</label>
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