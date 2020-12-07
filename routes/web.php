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
    return view('home',[
        'articles'=> App\Models\Article::latest()->get()
    ]);
});

/*Route::get('/newpost', function () {
    return view('newpost');
})->middleware('auth');*/

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/questions',function(){
    return view('questions');
})->middleware('auth');

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
//Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/html', 'ArticlesController@gettaghtml');
Route::get('/articles/java', 'ArticlesController@gettagjava');
Route::get('/articles/javascript', 'ArticlesController@gettagjavascript');
Route::get('/articles/python', 'ArticlesController@gettagpython');
Route::get('/articles/cplusplus', 'ArticlesController@gettagcplusplus');
Route::get('/articles/fundamentals', 'ArticlesController@gettagfundamentals');
Route::get('/articles/sql', 'ArticlesController@gettagsql');




Route::get('/articles/{articles}', 'ArticlesController@show');
Route::get('/articles/create', 'ArticlesController@create')->middleware('auth');


/*Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');*/






