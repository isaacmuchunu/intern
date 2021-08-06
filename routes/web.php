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
//Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts', 'PostsController@index');
Route::get('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{posts}/edit', 'PostsController@edit');
Route::get('/posts/{post}', 'PostsController@update');
Route::get('/posts/{post}', 'PostsController@destroy');
