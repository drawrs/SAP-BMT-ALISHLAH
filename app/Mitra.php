<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = "data_mitra";
    protected $fillable = ['nama_ibu',
                            'nama_lengkap',
                            'nama_panggilan',
                            'nama_pasangan',
                            'no_ktp',
                            'jk',
                            'no_telp',
                            'pendidikan',
                            'status_kawin',
                            'tgl_aktif_ktp',
                            'tgl_lahir',
                            'jumlah_tanggungan',
                            'tgl_lahir_pasangan'];
    public function keuangan ()
    {
        return $this->belongsTo('App\Keuangan');
    }
    public function alamat ()
    {
        return $this->hasOne('App\Alamat');
    }
}
