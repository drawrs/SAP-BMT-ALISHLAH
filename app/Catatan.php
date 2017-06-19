<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    //
    protected $table = 'catatan';
    protected $fillable = ['dokumen_ceklis_id', 'isi'];
}
