<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LkmPC extends Model
{
    //
    protected $table = 'lkm_pc';

    public function kon_pk(){
        return $this->hasOne('App\KonPK', 'lkm_pc_id');
    }
}
