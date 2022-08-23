<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Contracts\Session\Session;

class PendaftarController extends Controller
{

    public function index(Request $request)
    {
        //
        // $pendaftar = Pendaftar::paginate(10);

        $email = $request->session()->get('email');

        $user = pendaftar::where('email',"=",$email)->get(); 
        return view('/users/cekTahap1', [
            'cek1' => $user
        ]);
        

        // $pendaftar = pendaftar::all();
        // return view('/users/...', [
        //     'data' => $pendaftar
        // ]);
        
        // return response()->json([
        //     'data' => $pendaftar
        // ]);
    }

    public function show(Request $request){

        $email = $request->session()->get('email');

        $user =  DB::table('users')->where('email','=' ,$email)->get();
        
        return view('/users/pendaftaran', ['user'=>$user[0]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $role = $request->session()->get('role');
        if($role!='registered'){
            redirect('/view/users');
        }else{
            
            // DB::table('pendaftar')
            //     ->where(session()->get('email'))
            //     ->create(['STATUS_PENDAFTAR'=>request('STATUS_PENGAJUAN','WAITING')]);
            $pendaftar = new Pendaftar;
            $pendaftar->NAMA = $request ->name;
            $pendaftar->EMAIL = $request->session()->get('email');
            $pendaftar->ASAL_INSTANSI = $request ->asins;
            $pendaftar->JURUSAN = $request ->jurusan;
            $pendaftar->NO_TLP = $request ->tlp;
            $pendaftar->JENIS_INTERN = $request ->jenis;
            $pendaftar->KEL_IND = $request ->kelind;
            $pendaftar->PERIODE_MAGANG = $request ->periode;
            $pendaftar->START_DATE = $request ->startdate;
            $pendaftar->END_DATE = $request ->enddate;
            $pendaftar->PILIHAN_TEMPAT = $request ->pil;
            $pendaftar->RENCANA_KEGIATAN = $request ->rencana;
            $pendaftar->FILE_CV = $request ->file;
            $pendaftar->STATUS_PENDAFTAR = $request->input('STATUS_PENDAFTAR','Waiting');
            

            // var_dump($pendaftar);
            if($pendaftar->save()){
                echo "
                <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/users/cekTahap1'
                </script>
                ";
            }else{
                echo "
                <script>
                alert('Data gagal ditambahkan');
                document.location.href='/users'
                </script>
                ";
            };
            // DB::table('pendaftar')
            //      ->where('email')
            //      ->update(['STATUS_PENDAFTAR' => "waiting"]);
        }
        

    }


        // return response()->json([
        //     'data' => $pendaftar,
        //     'message' => 'Tambah data berhasil!!'
        // ]);
    //}

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
