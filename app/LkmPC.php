<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LkmPC extends Model
{
    //
    protected $table = 'lkm_pc';
    protected $fillable = ['no_aplikasi','tujuan_pb','penjelasan'];
    public function kon_pk(){
        return $this->hasOne('App\KonPK', 'lkm_pc_id');
    }
}
