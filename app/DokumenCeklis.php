<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokumenCeklis extends Model
{
    //
    protected $table = 'dokumen_ceklis';
    protected $fillable =   [
                                'no_aplikasi',
                                'tgl_satu',
                                'mark_satu',
                                'nama_satu',
                                'jabatan_satu',
                                'tgl_dua',
                                'mark_dua',
                                'nama_dua',
                                'jabatan_dua'
                            ];

    public function catatan(){
        return $this->hasMany('App\Catatan');
    }
}
