<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lkm extends Model
{
    //
    protected $table = 'lkm';
    protected $fillable = ['tipe', 'no_aplikasi', 'pesan'];
}
