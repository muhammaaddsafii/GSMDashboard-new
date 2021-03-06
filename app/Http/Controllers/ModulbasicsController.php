<?php

namespace App\Http\Controllers;

use App\Modulbasic;
use Illuminate\Http\Request;

class ModulbasicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $modulbasic = Modulbasic::having('level', "Basic")->get();
        return view('modul/modulbasic', ['basics'=>$modulbasic]);
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
     * @param  \App\Modulbasic  $modulbasic
     * @return \Illuminate\Http\Response
     */
    public function show(Modulbasic $modulbasic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulbasic  $modulbasic
     * @return \Illuminate\Http\Response
     */
    public function edit(Modulbasic $modulbasic)
    {
        return view('modul/editmodulbasic', ['modulbasic'=>$modulbasic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulbasic  $modulbasic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modulbasic $modulbasic)
    {
        Modulbasic::where('id', $modulbasic->id)
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

        return redirect('/modul/modulbasic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulbasic  $modulbasic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modulbasic $modulbasic)
    {
        Modulbasic::destroy($modulbasic->id);
        return redirect('/modul/modulbasic');
    }
}
