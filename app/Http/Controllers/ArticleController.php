<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Cache::remember('articles', 5, function () {
            return DB::table('articles')->get();
        });

        $article = Cache::rememberForever('articles', function () {
            return DB::table('articles')->get();
            });
        return view('article.index', compact('article'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $request->image
        ]);
        return redirect('/article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Cache::remember("articles:id:$id", 10, function () use ($id) {
        return Article::find($id);
        });
        return view('article.show', ['id'=>$id])->with(compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.editarticle',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;
        $article->save();
        return redirect('/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add()
    {
        return view('article.addarticle');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/article');
    }
}
