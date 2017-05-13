<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = "data_keuangan";
    public function mitra ()
    {
        return $this->belongsTo('App\Mitra');
    }
}
