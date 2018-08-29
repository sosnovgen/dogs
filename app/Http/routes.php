<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('one');
});
*/

//---------------------- Site ------------------------
Route::get('/','FrontController@one');
Route::get('/about', function() { return view('site.about'); });
Route::get('/show/{id}','FrontController@show');
Route::get('/gallery','FrontController@gallery');
Route::get('/contact','FrontController@contact');



//---------------------- Авторизация -------------------------
Route::auth();
Route::get('/admin', 'HomeController@index');



//----------------------- Admin ------------------------------

    Route::get('/test', function()
    {
        return view('admin.test');
        //return "Заглушка для admin страницы";
    });


    Route::resource('articles','ArticlesController');
    Route::resource('categories','CategoriesController');
    Route::resource('groups','GroupsController');

/*-----------  delete ----------------------------------*/

    Route::delete('/cat/{id}',
    [  'as' => 'cat',
        'uses' => 'CategoriesController@destroy']);

    Route::delete('/group/{id}',
        ['as' => 'group',
            'uses' => 'GroupsController@destroy']);

    Route::delete('/article/{id}',
    [  'as' => 'article',
        'uses' => 'ArticlesController@destroy']);


Route::get('articlesort/{id}','ArticlesController@indexid');
