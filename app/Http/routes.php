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

Route::get('/', function () {
    return view('welcome');
});

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


    Route::delete('/group/{id}',
        ['as' => 'group',
            'uses' => 'GroupsController@destroy']);


