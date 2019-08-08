<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali_siswa extends Model
{
    Protected $fillable = ['wali_id','siswa_nisn','kompetensi_kode','wali_nama_ayah','wali_pekerjaan_ayah','wali_nama_ibu','wali_pekerjaan_ibu','wali_alamat','wali_tlpn'];
    Public $timestamps = true;
 
    public function siswa()
    {
    	return $this->belongsTo('App\Siswa','siswa_id');
    }
}
