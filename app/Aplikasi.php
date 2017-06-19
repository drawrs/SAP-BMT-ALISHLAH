<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    protected $table = "data_aplikasi";
    protected $fillable = ['no_aplikasi',
                            'tanggal',
                            'cabang_id',
                            'mitra_id',
                            'keuangan_id',
                            'produk_id',
                            'rekomen_pb',
                            'nominal_pb',
                            'waktu_pb',
                            'angs_pb',
                            'margin_pb',
                            'kode_sro',
                            'nama_sro',
                            'perkenalan',
                            'saran'];
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
        return $this->belongsTo('App\NapSatu', 'no_aplikasi', 'no_aplikasi');
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
