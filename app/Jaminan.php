<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaminan extends Model
{
    //
    protected $table = 'jaminan';
    protected $fillable = ['no_aplikasi',
                            'dokumen',
                            'bentuk',
                            'kuantitas',
                            'harga',
                            'market',
                            'bobot',
                            'ftv',
                            'taksasi'];
}
