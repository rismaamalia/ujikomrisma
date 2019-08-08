<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    Protected $fillable = ['guru_kode','kompetensi_kode','guru_nip','guru_nama','guru_alamat','guru_tlpn'];
    Public $timestamps = true;
 
    public function kompetensi_keahlian()
    {
    	return $this->belongsTo('App\Kompetensi_keahlian');
    }

    public function nilai()
    {
        return $this->hasMany('App\Nilai','nilai_id');
    }
}