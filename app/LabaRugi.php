<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabaRugi extends Model
{
    //
    protected $table = 'laba_rugi';
    protected $fillable = ['no_aplikasi', 'catatan', 'jml_angs', 'lb_rg', 'income'];
}
