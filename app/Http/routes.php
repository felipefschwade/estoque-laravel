<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::group(['middleware' => ['web']], function () {
    Route::get('/produtos' , 'ProdutoController@lista');
	Route::get('/produtos/mostra/{id}' , 'ProdutoController@mostra');
	Route::get('/produtos/remove/{id}' , 'ProdutoController@remove');
	Route::get('/produtos/novo' , 'ProdutoController@novo');
	Route::post('/produtos/adiciona' , 'ProdutoController@adiciona');
	Route::get('/produtos/listaJSON' , 'ProdutoController@listaJSON');
});	
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'ProdutoController@lista');
});
