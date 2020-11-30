<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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
    return view('home',[
        'articles'=> App\Models\Article::latest()->get()
    ]);
});

Route::get('/newpost', function () {
    return view('newpost');
});

Route::get('/post', function () {
    return view('post');
});



/*Route::get('/search', function (Request $request) {
    if (isset($request->search)) {
        return App\Models\Article::search($request->search)->get();
    }
});*/
/*Route::get('/post', function(){
    return view('post');
});*/

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



Route::post('/save', 'ArticlesController@store');
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/show', 'ArticlesController@show');

Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{articles}', 'ArticlesController@results');

Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');






