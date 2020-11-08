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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

/*Route::get('/view/login', function () {
    return view('home');
});*/

/*Route::get('/view/register', function () {
    return view('auth.registration.create');
});*/

Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store');
//Route::post('/login','SessionController@authenticate');
Route::get('/logout','SessionController@destroy');



