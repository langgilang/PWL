<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'NIM : 1931710154, NAMA : GILANG SURYA PRATAMA';
    }

    public function article_1()
    {
        return 'Halaman artikel dengan id 1';
    }

    public function article_2()
    {
        return 'Halaman artikel dengan id 2';
    }
}
