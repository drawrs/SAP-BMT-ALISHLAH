<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = "tempat_tinggal";
    protected $fillable = ['mitra_id','alamat_sekarang', 'telepon', 'no_ho', 'alamat_ktp', 'mitra_id'];
}
