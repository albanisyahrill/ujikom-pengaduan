<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    public function tanggapans(){
        return $this->hasMany('App\Tanggapan');
    }
}
