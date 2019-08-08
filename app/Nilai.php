<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    
    Protected $fillable = ['siswa_nisn','guru_kode','sk_kode','nilai_angka','nilai_huruf'];
    Public $timestamps = true;
 
    public function siswa()
    {
        return $this->belongsTo('App\Siswa','siswa_id');
        
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru','guru_id');
        
    }
    public function standar_kompetensi()
    {
        return $this->belongsTo('App\Standar_kompetensi','standar_kompetensi_id');
        
    }
}
