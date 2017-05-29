<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    //
    protected $table = 'pendapatan';
    protected $fillable = ['no_aplikasi', 'judul', 'isi', 'tipe'];
}
