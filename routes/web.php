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
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 1931710154, NAMA : GILANG SURYA PRATAMA';
});

Route::get('/article/1', function () {
    return 'Halaman artikel dengan id 1';
});

Route::get('/article/2', function () {
    return 'Halaman artikel dengan id 2';
});

