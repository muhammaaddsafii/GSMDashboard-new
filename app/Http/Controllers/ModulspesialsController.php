<?php

namespace App\Http\Controllers;

use App\Modulspesial;
use Illuminate\Http\Request;

class ModulspesialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulspesial= Modulspesial::having('level', "Special")->get();
        return view('modul/modulspesial', ['spesial'=>$modulspesial]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Modulspesial  $modulspesial
     * @return \Illuminate\Http\Response
     */
    public function show(Modulspesial $modulspesial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulspesial  $modulspesial
     * @return \Illuminate\Http\Response
     */
    public function edit(Modulspesial $modulspesial)
    {
        return view('modul/editmodulspesial', ['modulspesial'=>$modulspesial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulspesial  $modulspesial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modulspesial $modulspesial)
    {
        Modulspesial::where('id', $modulspesial->id)
        ->update([
            'kategori'=> $request->kategori,
            'level'=> $request->level,
            'tingkat_sekolah'=> $request->tingkat_sekolah,
            'judul_modul'=> $request->judul_modul,
            'deskripsi_modul'=> $request->deskripsi_modul,
            'tantangan'=> $request->tantangan,
            'url_video'=> $request->url_video,
            'url_dokumen'=> $request->url_dokumen,
            'url_gambar'=> $request->url_gambar,
        ]);

        return redirect('/modul/modulspesial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulspesial  $modulspesial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modulspesial $modulspesial)
    {
        Modulspesial::destroy($modulspesial->id);
        return redirect('/modul/modulspesial');
    }
}
