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
Route::group(['prefix'=>'admin'], function()

{
    //Route::get('/', 'GateController@index');


//-------------------------------------------------------
    Route::get('/test', function()
    {
        return view('admin.test');
        //return "Заглушка для admin страницы";
    });


    Route::resource('articles','ArticlesController');
    Route::resource('categories','CategoriesController');
    Route::resource('groups','GroupsController');



//-------------------------------------------------------
    Route::get('/categories/{id}/delete',
        ['as' => 'categories.predelete',
            'uses' => 'CategoriesController@delete']);

    Route::get('/articles/{id}/delete',
        ['as' => 'articles.predelete',
            'uses' => 'ArticlesController@delete']);


//--------------------------------------------------------

    Route::delete('/cat/{id}',
        ['as' => 'cat',
            'uses' => 'CategoriesController@destroy']);

    Route::delete('/group/{id}',
        ['as' => 'group',
            'uses' => 'GroupsController@destroy']);

    Route::delete('/artic/{id}',
        ['as' => 'artic',
            'uses' => 'ArticlesController@destroy']);


});