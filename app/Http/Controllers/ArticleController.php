<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article_1()
    {
        return 'Halaman artikel dengan id 1';
    }

    public function article_2()
    {
        return 'Halaman artikel dengan id 2';
    }
}
