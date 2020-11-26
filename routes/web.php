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


Auth::routes();

// HOME
Route::get('/', 'HomeController@index');

// ABOUT
Route::get('/about', 'AboutController@index');
Route::get('/about/add','AboutController@add');
Route::get('/about/{id}', 'AboutController@show');
Route::get('/about/edit/{id}', 'AboutController@edit');
Route::get('/about/delete/{id}','AboutController@delete');
Route::post('/about/update/{id}','AboutController@update');
Route::post('/about/create','AboutController@create');

// ARTICLE
Route::get('/article', 'ArticleController@index');
Route::get('/article/add','ArticleController@add');
Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');
Route::get('/article/{id}', 'ArticleController@show');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::get('/article/delete/{id}','ArticleController@delete');
Route::post('/article/update/{id}','ArticleController@update');
Route::post('/article/create','ArticleController@create');





