<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $abouts = DB::table('abouts')->paginate(10);
        return view('about.index', ['abouts' => $abouts]);
    }

    public function show($id)
    {
        $abouts = Cache::remember("abouts:id:$id", 10, function () use ($id) {
            return About::find($id);
        });
        return view('about.show', ['id'=>$id])->with(compact('abouts'));
    }

    public function add()
    {
        return view('about.adduser');
    }

    public function create(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }

        About::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'image' => $request->image
        ]);
        return redirect('/about');
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('about.edituser',['about'=>$about]);
    }

    public function update(Request $request, $id)
    {
        $about = about::find($id);
        $about->nim = $request->nim;
        $about->nama = $request->nama;
        $about->alamat = $request->alamat;
        if($article->featured_image &&file_exists(storage_path('app/public/' . $article->featured_image)))
        {
            \Storage::delete('public/'.$article->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $article->featured_image = $image_name;
        $article->save();
        return redirect('/about');
    }

    public function delete($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect('/about');
    }
}
