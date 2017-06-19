<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekPers extends Model
{
    //
    protected $table = 'rek_pers';
    protected $fillable = ['no_aplikasi', 'user_id', 'pesan'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
