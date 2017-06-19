<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilikJaminan extends Model
{
    //
    protected $table = 'pemilik_jaminan';
    protected $fillable = ['no_aplikasi',
                            'nama',
                            'hubungan',
                            'alamat',
                            'telepon',
                            'lokasi_jaminan'];
}
