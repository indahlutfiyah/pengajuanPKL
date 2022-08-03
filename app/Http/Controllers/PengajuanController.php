<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        //
        $pengajuan = Pengajuan::paginate(10);
        return view('pengajuan',[
            'data' => $pengajuan,
            'message' => 'berhasil!!'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(){
        return view('tahap2');
    }

    public function store(Request $request)
    {
        //
        $pengajuan = new Pengajuan;
        $pengajuan->SURAT_PENGANTAR = $request ->SURAT_PENGANTAR;
        $pengajuan->PROPOSAL = $request ->PROPOSAL;
        $pengajuan->STATUS_PENGAJUAN = $request ->STATUS_PENGAJUAN;
    
          
        // $pengajuan->save();

        // return response()->json([
        //     'data' => $pengajuan,
        //     'message' => 'Tambah data berhasil!!'
        // ]);

        if($pengajuan->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/kecamatan'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/createkecamatan'
            </script>
            ";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan $pendaftar)
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
        $pengajuan = Pengajuan::find($request->id);
        $pengajuan = new Pengajuan;
        $pengajuan->SURAT_PENGANTAR = $request ->SURAT_PENGANTAR;
        $pengajuan->PROPOSAL = $request ->PROPOSAL;
        $pengajuan->STATUS_PENGAJUAN = $request ->STATUS_PENGAJUAN;
          
        $pengajuan->save();

        // return response()->json([
        //     'data' => $pengajuan,
        //     'message' => 'Ubah data berhasil!!'
        // ]);
                return redirect('/pengajuan')->with('status','Pengajuan berhasil di update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $pengajuan = Pengajuan::find($request->id);
        $pengajuan->delete();

        return response()->json([
            'message' => 'Data berhasil di hapus coyyy!!!'
        ]);
    }
}
