<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{


    // MARITZAAAAAA
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendaftar = Pendaftar::paginate(10);
        return response()->json([
            'data' => $pendaftar
        ]);
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
        $pendaftar = new Pendaftar;
        $pendaftar->NAMA = $request ->NAMA;
        $pendaftar->ASAL_INSTANSI = $request ->ASAL_INSTANSI;
        $pendaftar->JURUSAN = $request ->JURUSAN;
        $pendaftar->NO_TLP = $request ->NO_TLP;
        $pendaftar->EMAIL = $request ->EMAIL;
        $pendaftar->PERIODE_MAGANG = $request ->PERIODE_MAGANG;
        $pendaftar->START_DATE = $request ->START_DATE;
        $pendaftar->END_DATE = $request ->END_DATE;
        $pendaftar->PILIHAN_TEMPAT = $request ->PILIHAN_TEMPAT;
        $pendaftar->RENCANA_KEGIATAN = $request ->RENCANA_KEGIATAN;
        $pendaftar->FILE_CV = $request ->FILE_CV;
        $pendaftar->STATUS_PENGAJUAN = $request ->STATUS_PENGAJUAN;
        $pendaftar->PASSWORD = $request ->PASSWORD;
          
        $pendaftar->save();

        return response()->json([
            'data' => $pendaftar,
            'message' => 'Tambah data berhasil!!'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftar $pendaftar)
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
        $pendaftar = Pendaftar::find($request->id);
        $pendaftar->NAMA = $request ->NAMA;
        $pendaftar->ASAL_INSTANSI = $request ->ASAL_INSTANSI;
        $pendaftar->JURUSAN = $request ->JURUSAN;
        $pendaftar->NO_TLP = $request ->NO_TLP;
        $pendaftar->EMAIL = $request ->EMAIL;
        $pendaftar->PERIODE_MAGANG = $request ->PERIODE_MAGANG;
        $pendaftar->START_DATE = $request ->START_DATE;
        $pendaftar->END_DATE = $request ->END_DATE;
        $pendaftar->PILIHAN_TEMPAT = $request ->PILIHAN_TEMPAT;
        $pendaftar->RENCANA_KEGIATAN = $request ->RENCANA_KEGIATAN;
        $pendaftar->FILE_CV = $request ->FILE_CV;
        $pendaftar->STATUS_PENGAJUAN = $request ->STATUS_PENGAJUAN;
        $pendaftar->PASSWORD = $request ->PASSWORD;
          
        $pendaftar->save();

        return response()->json([
            'data' => $pendaftar,
            'message' => 'Ubah data berhasil!!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $pendaftar = Pendaftar::find($request->id);
        $pendaftar->delete();

        return response()->json([
            'message' => 'Data berhasil di hapus coyyy!!!'
        ]);
    }
}
