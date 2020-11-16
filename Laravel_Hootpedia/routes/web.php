<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/newpost', function () {
    return view('newpost');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/newpost', function(){
    return view('post');
});

/*Route::get('/view/login', function () {
    return view('home');
});*/

/*Route::get('/view/register', function () {
    return view('auth.registration.create');
});*/

Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store');

Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');




Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{articles}', 'ArticlesController@show');






