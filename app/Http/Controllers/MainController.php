<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aplikasi;
use App\Produk;
use App\Keuangan;
use App\Mitra;
use App\Cabang;
use App\KonPK;
use DB;
class MainController extends Controller
{
    //
    public function coba(){
        $keuangan = new \App\Mitra;
        $enum = getEnum($keuangan, 'pendidikan');
        foreach ($enum as $key => $value) {
            echo $value;
        }
        //return json_encode($enum);
    }
    public function test(){
        return "lalal";
    }
    public function dashboard(){
        $app = Aplikasi::all();
        return view('beranda', compact('app'));
    }
    public function tracking(){
        return view('users.tracking');
    }
    public function getLihatAplikasi($no_ap){
        $app = Aplikasi::where('no_aplikasi', $no_ap)->first();
        $mitraModel = new Mitra;
        $produks = new Produk;
        $cabangs = new Cabang;

        $lbu = $app->lkm->where('tipe', 'LBU')->first();
        $kusi = $app->lkm->where('tipe', 'KUSI')->first();
        $ps = $app->lkm->where('tipe', 'PS')->first();
        $ru = $app->lkm->where('tipe', 'RU')->first();
        $uumru = $app->lkm->where('tipe', 'UUMRU')->first();

        $lkm_pc = $app->lkm_pc;
        //$konfirmasi_pk = KonPK::where('lkm_pc_id', $lkm_pc->id)->get();
        $konfirmasi_pk = $lkm_pc->kon_pk->get();

        // NAP Satu
        $nap_satu = $app->nap_satu;
        $pendapatan = $app->pendapatan;
        $pengeluaran = $app->pengeluaran;
        return view('lihat-aplikasi', compact('app', 'produks', 'mitraModel', 'cabangs', 'lbu', 'kusi', 'ps','ru', 'uumru', 'lkm_pc', 'konfirmasi_pk', 'nap_satu', 'pendapatan', 'pengeluaran'));
    }

}
