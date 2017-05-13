<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = "data_mitra";
    public function keuangan ()
    {
        return $this->belongsTo('App\Keuangan');
    }
    public function alamat ()
    {
        return $this->hasOne('App\Alamat');
    }
}
