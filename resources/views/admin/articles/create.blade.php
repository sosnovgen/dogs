@extends('admin.main')
@section('content')

        <button type="button" class="close" onclick="history.back();">&times;</button>

        <div class="col-md-8">
            <form role="form"
                  method="POST" action="{{action('ArticlesController@store')}}" enctype="multipart/form-data">

                <div class="row ">
                    <h3>Новая статья</h3>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label >Название</label>
                        <input type="text" name="title" class="form-control"><br>
                    </div>

                    <div class="col-md-6">
                        <label>Картинка</label>
                        <input type="file" name="preview" class="filestyle" data-buttonText=" Выбрать"><br>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="category_id">Категория</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach

                        </select><br>
                    </div>

                    <div class="col-md-6">
                        <label for="group_id">Группа</label>
                        <select name="group_id" class="form-control">

                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->title}}</option>
                            @endforeach

                        </select><br>

                    </div>


                </div>

                <div class="form-group">
                    <label for="comment">Текст:</label>
                    <textarea class="form-control" rows="5" id="editor" name ="content"></textarea>
                </div>

                <h2>Мета</h2>


                <label for="text">description:</label>
                <input type="text" name="meta_description" class="form-control"><br>

                <label for="text">keywords:</label>
                <input type="text" name="meta_keywords" class="form-control"><br>


                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" value="Сохранить" class="btn btn-default">


            </form>

        </div>

        <div class="col-md-4">
            <div class="description small">
                <p>* Здесь можно добавить/отредактировать статью.</p>
                <p>* Сначала создать категорию, затем добавить саму статью.</p>
                <p>* Поле "Группа" - не обязательна к заполнению.</p>
                <p>* Размер картинки примерно 300Х300.</p>
                <p>* Перенос строки в описании: "Shift + Enter". </p>

            </div>
        </div>


@stop
