<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi_keahlian extends Model
{
    Protected $fillable = ['bidang_kode','bidang_nama'];
    Public $timestamps = true;
 
    public function bidang_studi()
    {
    	return $this->belongsTo('App\BidangStudi','bidang_studi_id');
    }

    public function guru()
    {
    	return $this->hasMany('App\Guru','guru_id');
    }

    public function siswa()
    {
    	return $this->hasMany('App\Siswa','siswa_id');
    }

    public function standar_kompetensi()
    {
    	return $this->hasMany('App\Standar_kompetensi','standar_kompetensi_id');
    }
}
