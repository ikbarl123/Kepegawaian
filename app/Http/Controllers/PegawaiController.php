<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Models\jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = pegawai::with('jabatan')->simplePaginate(9);
        return view('kepegawaian.pegawai',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = jabatan::all();
        return view('kepegawaian.tambah-pegawai',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pegawai::create([
            'nama_pegawai'=>$request->nama_pegawai,
            'jumlah_anak'=>$request->jumlah_anak,
            'id_jabatan'=>$request->id_jabatan,
            ]);

        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        //
    }
        public function showAbsensi(pegawai $pegawai)
    {
        //
    }
        public function showPenggajian(pegawai $pegawai)
    {
        //
    }
    public function saveAbsensi(Request $request)
    {
        //
    }

        public function savePenggajian(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(pegawai $pegawai)
    {
            $jabatan = jabatan::all();
             return view('kepegawaian.edit-pegawai',compact('pegawai','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pegawai $pegawai)
    {
        pegawai::where('id_pegawai',$pegawai->id_pegawai)
        ->update([
            'nama_pegawai'=>$request->nama_pegawai,
            'jumlah_anak'=>$request->jumlah_anak,
            'id_jabatan'=>$request->id_jabatan,
        ]);
         return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
