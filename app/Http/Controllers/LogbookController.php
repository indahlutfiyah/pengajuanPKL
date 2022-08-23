<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Logbook;
use Illuminate\Support\Facades\DB;

class LogbookController extends Controller
{
    public function index()
    {
        //
        $logbook = logbook::paginate(10);
        return view('users/logbook', [
            'logbook1' => $logbook
        ]);
        
        // return response()->json([
        //     'data' => $logbook,
        //     'message' => 'berhasil!!'
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(){
        return view('/users/tambahlogbook');
    }

    public function store(Request $request)
    {
        //
        $logbook = new Logbook;
        $logbook->NAMA = $request ->name;
        $logbook->TGL_KEGIATAN = $request ->tgl;
        $logbook->DESKRIPSI = $request ->des;
    
          
        // $logbook->save();

        if($logbook->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='users/logbook'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='users/tambahlogbook'
            </script>
            ";
        };

        // return response()->json([
        //     'data' => $logbook,
        //     'message' => 'Tambah data berhasil!!'
        // ]);

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
    public function edit($id){ 
        // mengambil data logbook berdasarkan id yang dipilih
        $logbook = DB::table('logbook')->where('ID_LOGBOOK',$id)->get(); 
        return view('users/editlogbook',['logbook' => $logbook]);
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
        
        DB::table('logbook')->where('ID_LOGBOOK',$request->id)->update([
            // $logbook = Logbook::find($request->id);
            // $logbook = new Logbook;
            'NAMA' => $request ->name,
            'TGL_KEGIATAN' => $request ->tgl,
            'DESKRIPSI' => $request ->des,
        ]);
    
          
        // $logbook->save();
        Session::flash('status','Data Logbook berhasil di update!');
        return redirect('/users/logbook');
        // return response()->json([
        //     'data' => $logbook,
        //     'message' => 'Ubah data berhasil!!'
        // ]);

        
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
