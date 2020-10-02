<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article_1()
    {
        return view('article.1');
    }

    public function article_2()
    {
        return view('article.2');
    }
}
