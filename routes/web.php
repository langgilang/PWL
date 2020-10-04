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
// HOME
Route::get('/', 'HomeController@index');

// ABOUT
Route::get('/about', 'AboutController@about');

// ARTICLE
Route::get('/article', 'ArticleController@index');
Route::get('/article/{id}', 'ArticleController@show');


