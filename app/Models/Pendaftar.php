<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $primaryKey = 'ID_PENDAFTAR';
    protected $fillable = ['NAMA, ASAL_INSTANSI, JURUSAN, NO_TLP, EMAIL, 
    PERIODE_MAGANG, START_DATE, END_DATE, PILIHAN_TEMPAT, RENCANA_KEGIATAN, FILE_CV, STATUS_PENGAJUAN, PASSWORD'];

}
