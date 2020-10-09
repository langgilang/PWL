<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = DB::table('abouts')->get();
        return view('about.index', ['abouts' => $abouts]);
    }

    public function show($id)
    {
        $abouts = Cache::remember("abouts:id:$id", 10, function () use ($id) {
            return About::find($id);
        });
        dump($abouts);
        return view('about.show', ['id'=>$id])->with(compact('abouts'));
    }
}
