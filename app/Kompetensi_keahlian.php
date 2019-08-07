<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi_keahlian extends Model
{
    Protected $fillable = ['bidang_kode','bidang_nama'];
    Public $timestamps = true;
 
    public function bidang_studi()
    {
    	return $this->belongsTo('App\BidangStudi');
    }
}
