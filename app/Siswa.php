<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    Protected $fillable = ['siswa_nisn','kompetensi_kode','siswa_nama','siswa_alamat','siswa_tgl_lahir','siswa_foto'];
    Public $timestamps = true;
 
    public function kompetensi_keahlian()
    {
    	return $this->belongsTo('App\Kompetensi_keahlian','kompetensi_keahlian_id');
    }

    public function wali_siswa()
    {
    	return $this->hasMany('App\Wali_siswa','wali_siswa_id');
    }

    public function nilai()
    {
        return $this->hasMany('App\Nilai','nilai_id');
    }
}
