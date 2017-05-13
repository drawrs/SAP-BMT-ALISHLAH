<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    protected $table = "data_aplikasi";
    public function mitra ()
    {
        return $this->belongsTo('App\Mitra');
    }
    public function keuangan ()
    {
        return $this->belongsTo('App\Keuangan');
    }
    public function produk ()
    {
        return $this->belongsTo('App\Produk');
    }
    public function cabang ()
    {
        return $this->belongsTo('App\Cabang');
    }
    public function lkm ()
    {
        return $this->hasOne('App\Lkm', 'no_aplikasi', 'no_aplikasi');
    }
    public function lkm_pc ()
    {
        return $this->hasOne('App\LkmPC', 'no_aplikasi', 'no_aplikasi');
    }
    public function nap_satu ()
    {
        return $this->hasOne('App\NapSatu', 'no_aplikasi', 'no_aplikasi');
    }
    public function pendapatan ()
    {
        return $this->hasOne('App\Pendapatan', 'no_aplikasi', 'no_aplikasi');
    }
    public function pengeluaran ()
    {
        return $this->hasOne('App\Pengeluaran', 'no_aplikasi', 'no_aplikasi');
    }
}
