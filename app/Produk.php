<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = 'produk';

    public function produk(){
        return $this->belongsTo('App\Produk');
    }
}
