<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class PendaftarController extends Controller
{


    // MARITZAAAAAA
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        //
        // $pendaftar = Pendaftar::paginate(10);
        $pendaftar = pendaftar::all();
        return view('/admin/...', [
            'data' => $pendaftar
        ]);

        // return response()->json([
        //     'data' => $pendaftar
        // ]);
    }

    public function indexUser()
    {
        //
        // $pendaftar = Pendaftar::paginate(10);

        $pendaftar = auth::users()->id; 
        $user = User::where('id',$pendaftar)->first(); 
        return response()->json([ 
            'data' => $pendaftar 
        ]);

        // $pendaftar = pendaftar::all();
        // return view('/users/...', [
        //     'data' => $pendaftar
        // ]);
        
        // return response()->json([
        //     'data' => $pendaftar
        // ]);
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
          
        if($pendaftar->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/'
            </script>
            ";
        };

        // return response()->json([
        //     'data' => $pendaftar,
        //     'message' => 'Tambah data berhasil!!'
        // ]);
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

    //change status
    public function changeStatus($id){
        $getStatus = pendaftar::select('STATUS_PENGAJUAN')->where('ID_PENDAFTAR', $id)->first();
        if($getStatus->STATUS_PENGAJUAN == 1){
            $STATUS_PENGAJUAN=0;
        }else{
            $STATUS_PENGAJUAN=1;
        }

        pendaftar::where('ID_PENDAFTAR', $id)->update(['STATUS_PENGAJUAN'=>$STATUS_PENGAJUAN]);
        return redirect()->back();
    }

    public function decline(){
        $accept = DB::table('pendaftar')
        ->where('pendaftar.STATUS_PENGAJUAN', '=', '0')->get();
        return view('/admin/...', [
            'data' => $accept
        ]);
    }
    
    public function accept(){
        $decline = DB::table('pendaftar')
        ->where('pendaftar.STATUS_PENGAJUAN', '=', '1')->get();
        return view('/admin/...', [
            'data' => $decline
        ]);
    }
}
