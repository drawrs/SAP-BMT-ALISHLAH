<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neraca extends Model
{
    //
    protected $table = 'neraca';
    protected $fillable = ['no_aplikasi', 'judul', 'isi', 'tipe'];
}
