<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang_studi extends Model
{
    Protected $fillable = ['bidang_kode','bidang_nama'];
    Public $timestamps = true;
    
    public function kompetensi_keahlian()
    {
        return $this->hasOne('App\Kompetensi_keahlian');
    }
}
