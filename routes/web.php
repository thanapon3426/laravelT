<?php

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
    return view('indexx');
});
Route::get('posts');

Route::redirect('/', '/indexx');

Route::resource('/posts', 'PostsController');

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return redirect ('/');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/menu/{type}', 'PostsController@mymenu');

Route::get('/storemenu', 'PostsController@storemenu');
Route::get('/createmenu/{type}', 'PostsController@createmenu');
Route::get('/editmenu/{id}', 'PostsController@editmenu');
Route::PUT('/updatemenu/{id}', 'PostsController@updatemenu');
Route::DELETE('/destroymenu/{id}', 'PostsController@destroymenu');

Route::get('/storeabout', 'PostsController@storeabout');
Route::get('/createabout', 'PostsController@createabout');
Route::get('/editabout/{id}', 'PostsController@editabout');
Route::PUT('/updateabout/{id}', 'PostsController@updateabout');
Route::DELETE('/destroyabout/{id}', 'PostsController@destroyabout');

Route::get('/indexx', 'PostsController@indexx');

Route::get('/indexmenu/{id}', 'PostsController@indexmenu');
Route::get('/edittypet/{id}', 'PostsController@edittypet');

Route::get('/indexusers', 'PostsController@indexusers');
Route::PUT('/updateusers/{id}', 'PostsController@updateusers');
Route::DELETE('/destroyusers/{id}', 'PostsController@destroyusers');
