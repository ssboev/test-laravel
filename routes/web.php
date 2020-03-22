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
Route::get('/create','UserController@create')->name('user.create');
Route::post('/create','UserController@store')->name('user.store');
Route::post('/user/{id}','UserController@show')->name('user.show');

Route::get('/articles','ArticleController@index')->name('article.index');
Route::get('/articles/create','ArticleController@create')->name('article.create');
Route::post('/articles','ArticleController@store')->name('article.store');
Route::post('/articles/{id}','ArticleController@show')->name('article.show');
Route::delete('/articles/{id}','ArticleController@destroy')->name('article.destroy');
