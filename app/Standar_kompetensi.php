<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standar_kompetensi extends Model
{
    Protected $fillable = ['sk_kode','kompetensi_kode','sk_nama','sk_kelas'];
    Public $timestamps = true;
 
    public function kompetensi_keahlian()
    {
    	return $this->belongsTo('App\Kompetensi_keahlian','kompetensi_keahlian_id');
    }

    public function nilai()
    {
        return $this->hasMany('App\Nilai','nilai_id');
    }
}
