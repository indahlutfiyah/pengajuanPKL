<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logbook;

class LogbookController extends Controller
{
    public function index()
    {
        //
        $logbook = Logbook::paginate(10);
        return response()->json([
            'data' => $logbook,
            'message' => 'berhasil!!'
        ]);
    }
//test aja
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $logbook = new Logbook;
        $logbook->NAMA = $request ->NAMA;
        $logbook->TGL_KEGIATAN = $request ->TGL_KEGIATAN;
        $logbook->DESKRIPSI = $request ->DESKRIPSI;
    
          
        $logbook->save();

        return response()->json([
            'data' => $logbook,
            'message' => 'Tambah data berhasil!!'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $pendaftar)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $logbook = Logbook::find($request->id);
        $logbook = new Logbook;
        $logbook->SURAT_PENGANTAR = $request ->SURAT_PENGANTAR;
        $logbook->PROPOSAL = $request ->PROPOSAL;
        $logbook->STATUS_logbook = $request ->STATUS_logbook;
          
        $logbook->save();

        return response()->json([
            'data' => $logbook,
            'message' => 'Ubah data berhasil!!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $logbook = Logbook::find($request->id);
        $logbook->delete();

        return response()->json([
            'message' => 'Data berhasil di hapus coyyy!!!'
        ]);
    }
}
