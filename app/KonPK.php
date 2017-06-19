<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KonPK extends Model
{
    //
    protected $table = 'konfirmasi_pk';
    protected $fillable = ['hbng',
                            'kl_baik',
                            'krkt_baik',
                            'lkm_pc_id',
                            'lm_hbng',
                            'nama',
                            'telp'];
}
