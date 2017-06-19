<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = "data_keuangan";
    protected $fillable = ['alamat',
                            'mitra_id',
                            'bidang_usaha',
                            'kecamatan',
                            'nama_usaha',
                            'no_npwp',
                            'telepon',
                            'tipe_pendapatan',
                            'tujuan_pb',
                            'kode_pos',
                            'tujuan_pb_detail'];
    public function mitra ()
    {
        return $this->belongsTo('App\Mitra');
    }
}
