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
    return view('welcome');
});

Route::get('/api/test', ['uses' => 'TestControllers@test']);
Route::auth();

Route::get('/home', 'HomeController@index');
*/
Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/articles','ArticleController@index');
    Route::get('/create','ArticleController@create');
    Route::get('/edit/{id}','ArticleController@edit');
    Route::post('/update/{id}','ArticleController@update');
    Route::get('/delete/{id}','ArticleController@delete');
    Route::post('/store','ArticleController@store');
    Route::get('/show/{id}','ArticleController@show');
});
