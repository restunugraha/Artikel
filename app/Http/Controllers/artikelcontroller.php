<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
class artikelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $artikels=artikel::all();
       return view('index_artikel',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rartikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto=$request->file('foto');
        $nama=$foto->getClientOriginalExtension();
        $tempat=public_path('storage/foto');
        $pindah=$foto->move($tempat,time().$nama);
        $simpan=artikel::create([
            'judul_artikel' => $request->input('Judul') ,
            'slug' => $request->input('slug') ,
            'nama_kategori' => $request->input('kategori') ,
            'kutipan' => $request->input('kutipan') ,
            'foto' => time().$nama ,
            'isi' => $request->input('artikel') ,
        ]);
        $simpan->save();
        return redirect('/artikel/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel=artikel::find($id);
        return view('deatail_artikel',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=artikel::find($id);
        return view('edit_artikel',compact('edit'));
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
       $update = artikel::find($id);
       $update->judul_artikel=$request->input('Judul');
       $update->slug=$request->input('slug');
       $update->nama_kategori=$request->input('kategori');
       $update->kutipan=$request->input('kutipan');
       $update->foto=$request->input('fotoup');
       $update->isi=$request->input('artikel');
       $update->save();
       return redirect('/artikel/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy =artikel::find($id);
        $destroy->delete();
        return redirect('artikel');
    }
}
