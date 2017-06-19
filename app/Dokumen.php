<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    //
    protected $table = 'dokumen';
    protected $fillable = ['no_aplikasi', 'judul', 'status', 'jenis', 'konfirmasi'];
}
