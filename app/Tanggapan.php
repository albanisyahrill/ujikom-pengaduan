<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    public function pengaduans(){
        return $this->belongsTo('App\Pengaduan', 'id_pengaduan');
    }
}
