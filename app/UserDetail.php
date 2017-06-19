<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'user_details';
    protected $fillable = ['jabatan', 'level', 'photo'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
