<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aplikasi;
use App\Produk;
use App\Keuangan;
use App\Mitra;
use App\Cabang;
use App\KonPK;
use App\Neraca;
use App\LabaRugi;
use App\LkmPC;
use App\NapSatu;
use App\Lkm;
use App\Pendapatan;
use App\Alamat;
use App\Pengeluaran;
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
    public function dashboard(Request $request){
        $app_model = new Aplikasi;
        $single_mitra = null;
        if ($request->has('q')) {
            $app_model = $app_model->where('no_aplikasi', 'like', '%' . $request->q . '%');
        } elseif ($request->has('no_ktp')) {
            $no_ktp = $request->no_ktp;
            $app_model = $app_model->whereHas('mitra', function($q) use($no_ktp){
                $q->where('no_ktp', $no_ktp);
            });
            $single_mitra = Mitra::where('no_ktp', $no_ktp)->first();
        }
        $apps = $app_model->paginate(10);
        return view('beranda', compact('apps', 'single_mitra'));
    }
    public function tracking(){
        return view('users.tracking');
    }
    public function getLihatAplikasi($no_ap){
        $app = Aplikasi::where('no_aplikasi', $no_ap)->first();
        $mitraModel = new Mitra;
        $produks = new Produk;
        $cabangs = new Cabang;
        // LKM
        $lkm = new Lkm;

        $lbu = $lkm->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'LBU'])->first();
        $kusi = $app->lkm->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'KUSI'])->first();
        $ps = $app->lkm->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'PS'])->first();
        $ru = $app->lkm->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'RU'])->first();
        $uumru = $app->lkm->where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'UUMRU'])->first();

        $lkm_pc = LkmPC::where('no_aplikasi', $app->no_aplikasi)->first();
        //$konfirmasi_pk = KonPK::where('lkm_pc_id', $lkm_pc->id)->get();
        $konfirmasi_pk = KonPK::where('lkm_pc_id', $lkm_pc->id)->get();

        // NAP Satu
        $nap_satu = $app->nap_satu;
        $pendapatan = new Pendapatan;
        $pengeluaran = new Pengeluaran;
        //return $pendapatan;
        // Neraca
        $neraca_harta = Neraca::where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'harta']);
        $neraca_hutang = Neraca::where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'hutang']);
        $neraca_modal = Neraca::where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'modal']);
        $labaRugi = LabaRugi::where(['no_aplikasi' => $app->no_aplikasi])->first();
        //return  $neraca->where('tipe', 'hutang')->get();
        return view('lihat-aplikasi', compact('app', 
                                            'produks', 
                                            'mitraModel', 
                                            'cabangs', 
                                            'lbu', 
                                            'kusi', 
                                            'ps',
                                            'ru', 
                                            'uumru', 
                                            'lkm_pc', 
                                            'konfirmasi_pk', 
                                            'nap_satu', 
                                            'pendapatan', 
                                            'pengeluaran',
                                            'neraca_hutang',
                                            'neraca_modal',
                                            'neraca_harta',
                                            'labaRugi'));
    }
    public function getTambahAplikasi2(){
        $app = new Aplikasi;
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

        // Neraca
        $neraca_harta = Neraca::where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'harta']);
        $neraca_hutang = Neraca::where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'hutang']);
        $neraca_modal = Neraca::where(['no_aplikasi' => $app->no_aplikasi, 'tipe' => 'modal']);
        $labaRugi = LabaRugi::where(['no_aplikasi' => $app->no_aplikasi])->first();
        //return  $neraca->where('tipe', 'hutang')->get();
        return view('lihat-aplikasi', compact('app', 
                                            'produks', 
                                            'mitraModel', 
                                            'cabangs', 
                                            'lbu', 
                                            'kusi', 
                                            'ps',
                                            'ru', 
                                            'uumru', 
                                            'lkm_pc', 
                                            'konfirmasi_pk', 
                                            'nap_satu', 
                                            'pendapatan', 
                                            'pengeluaran',
                                            'neraca_hutang',
                                            'neraca_modal',
                                            'neraca_harta',
                                            'labaRugi'));
    }
    public function getTambahAplikasi(){
        $app = Aplikasi::select('no_aplikasi')
                        ->orderBy('id', 'desc')
                        ->first();
        $produks = new Produk;
        $mitraModel = new Mitra;
        $cabangs = new Cabang;
        $no_app = $app->no_aplikasi +1 ;
       
        return view('tambah-aplikasi', compact('no_app','produks', 'mitraModel', 'cabangs'));
    }
    public function postTambahAplikasi(Request $request){
        $mitra = new Mitra;
        $alamat = new Alamat;
        $app = new Aplikasi;
        $lkm_pc = new LkmPC;
        $keuangan = new Keuangan;
        $lkm = new Lkm;
        $kon_pk = new KonPK;
        $laba_rugi = new LabaRugi;
        $nap_satu = new NapSatu;
        $neraca = new Neraca;
        $pendapatan = new Pendapatan;
        $pengeluaran = new Pengeluaran;
        // cek data mitra udah ada belom
        $cek_mitra = $mitra->where('no_ktp', $request->no_ktp);
        if ($cek_mitra->count() == 0) {
            $create_mitra = $mitra->create(['no_ktp' => $request->no_ktp]);
            $create_alamat = $alamat->create(['mitra_id' => $create_mitra->id]);
        }
        $mitra_id = $cek_mitra->first()->id;
        // create keuangan
        $create_keuangan = $keuangan->create(['mitra_id' => $mitra_id]);
        // tambahin ke request all
        $request->request->add(['mitra_id' => $mitra_id,
                                'keuangan_id' => $create_keuangan->id,
                                'tanggal' => toDate($request->tanggal)]);
        $create_app = $app->create($request->all());
        $no_aplikasi = $create_app->no_aplikasi;
        //return  $create_app->no_aplikasi;
        // create LKM
        foreach (getEnum(new Lkm, 'tipe') as $m_key => $m_val) {
            $create_lkm = $lkm->create(['no_aplikasi' => $no_aplikasi, 'tipe' => $m_val]);
        }
        // create LKM PC
        $create_lkm_pc = $lkm_pc->create(['no_aplikasi' => $no_aplikasi]);
        $lkm_pc_id = $create_lkm_pc->id;
        // create kon_kp
        foreach (getEnum($kon_pk, 'lm_hbng') as $m_key => $m_val) {
            $create_kon_pk = $kon_pk->create(['lkm_pc_id' => $lkm_pc_id, 'lm_hbng' => $m_val]);
        }
        // create laba rugi
        $create_laba_rugi = $laba_rugi->create(['no_aplikasi' => $no_aplikasi]);
        // create nap one 
        $create_nap_satu = $nap_satu->create(['no_aplikasi' => $no_aplikasi]);
        // create neraca
        foreach (getEnum($neraca, 'tipe') as $m_key => $m_val) {
            $create_neraca = $neraca->create(['no_aplikasi' => $no_aplikasi, 'tipe' => $m_val]);
        }
        // create pendapatan
        $create_pendapatan = $pendapatan->create(['no_aplikasi' => $no_aplikasi, 'tipe' => 'pu']);
        // create pengeluaran 
        $create_pengeluaran = $pengeluaran->create(['no_aplikasi' => $no_aplikasi, 'tipe' => 'pu_rt']);
        return redirect()->route('lihat_ap', ['no_ap' => $no_aplikasi]);
    }
    public function getDataKtp(Request $request){
        $mitra = new Mitra;
        $no_ktp = $request->q;
        $data = $mitra->select('no_ktp AS no_ktp', 'nama_lengkap AS nama')->where('no_ktp','like','%' . $no_ktp . '%')->get();
        //$array = array(['text' => "Hello", 'slug' => 'hello', 'id' => '1'], ['text' => "World", 'slug' => 'world', 'id' => '2']);
        return response()->json($data);
    }
    public function getDaftarMitra(){
        $mitras = Mitra::orderBy('nama_lengkap')->get();
        return view('mitra.list', compact('mitras'));
    }
    public function getHapusApp($id){
        $app = Aplikasi::find($id);
        if ($app->delete()) {
            $msg = "Berhasil dihapus!";
        } else {
            $msg = "Gagal menghapus";
        }
        return redirect()->back()->with(['msg' => $msg]);
    }
    public function getDetailMitra(Request $request){
        $mitraModel = new Mitra;
        $mitra = $mitraModel->find($request->id);
        return view('mitra.detail', compact('mitraModel', 'mitra'));
    }
}
