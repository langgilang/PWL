<?php

namespace App\Http\Controllers;

use PDF;
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
        $about = DB::table('abouts')->paginate(10);
        return view('about.index', ['about' => $about]);
    }

    public function show($id)
    {
        $about = Cache::remember("abouts:id:$id", 10, function () use ($id) {
            return About::find($id);
        });
        return view('about.show', ['id'=>$id])->with(compact('about'));
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
            'featured_image' => $image_name,
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
        $about = About::find($id);
        $about->nim = $request->nim;
        $about->nama = $request->nama;
        $about->alamat = $request->alamat;
        if($about->featured_image &&file_exists(storage_path('app/public/' . $about->featured_image)))
        {
            \Storage::delete('public/'.$about->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $about->featured_image = $image_name;
        $about->save();
        return redirect('/about');
    }

    public function delete($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect('/about');
    }

    public function cetak_pdf(){
        $about = About::all();
        $pdf = PDF::loadview('about.user_pdf',['about'=>$about]);
        return $pdf->stream();
    }
}
