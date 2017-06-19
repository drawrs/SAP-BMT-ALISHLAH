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
use App\Dokumen;
use App\Catatan;
use App\DokumenCeklis;
use App\Jaminan;
use App\PemilikJaminan;
use App\NapDua;
use App\MemoKomite;
use App\RekPers;
use DB;
use Auth;
class MainController extends Controller
{
    //

    

    protected function catatan($dokumen_ceklis_id){
        $catatan = array(
                array('dokumen_ceklis_id' => $dokumen_ceklis_id),
                array('dokumen_ceklis_id' => $dokumen_ceklis_id),
                array('dokumen_ceklis_id' => $dokumen_ceklis_id),
                array('dokumen_ceklis_id' => $dokumen_ceklis_id),
                array('dokumen_ceklis_id' => $dokumen_ceklis_id)
            );
        return $catatan;

    }
    public function getNoAplikasi($cab_id){
        $aplikasi = new Aplikasi;
        $kode_kantor = Cabang::select('kode')->find($cab_id)->kode;
        $kode_mro = Auth::user()->kode;
        $thisDay = date("Ymd");
        $sequence = 00;
        if ($aplikasi::all()->count() !== 0) {
            $sequence = $aplikasi->select('id')->orderBy('id','desc')->first()->id + 1;
        }

        $no_aplikasi = $kode_kantor . "" . $kode_mro . "" . $thisDay . "" . $sequence;
        return json_encode(['result' => $no_aplikasi]);
    }
    protected function dokumen($no_aplikasi){
        $dokumen = array(
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'KTP Mitra','status' => 'tidak','jenis' => 'DI'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Kartu Identitas Penjamin (suami-istri)','status' => 'tidak','jenis' => 'DI'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Akta Nikah / Akta Cerai/ Surat Kematian dan Kartu Keluarga','status' => 'tidak','jenis' => 'DI'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Surat Izin Usaha','status' => 'tidak','jenis' => 'IHDU'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Formulir Aplikasi Pembiayaan','status' => 'tidak','jenis' => 'FKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Wa\'ad Pemesanan Barang (Untuk produk prinsip jual beli)','status' => 'tidak','jenis' => 'FKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Catatan Keuangan (Penjualan/Pembelian)/Copy Rek. Koran/ Tabungan','status' => 'tidak','jenis' => 'FKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Nota Analisa Pembiayaan','status' => 'tidak','jenis' => 'FKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Laporan Penilaian Barang & Jaminan','status' => 'tidak','jenis' => 'FKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Foto Jaminan (Jika ada)','status' => 'tidak','jenis' => 'FKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Tanda Terima Pembelian Barang (untuk produk prinsip jual beli)','status' => 'tidak','jenis' => 'FKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Sertifikat','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'IMB/Cover Note','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'AJB / Cover note','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'PBB terakhir','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Girik / Letter C','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Riwayat Tanah','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Keterangan bebas sengketa','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Lainnya','status' => 'tidak','jenis' => 'JTBT'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'SHGP','status' => 'tidak','jenis' => 'JK'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'SHGB','status' => 'tidak','jenis' => 'JK'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'SHM','status' => 'tidak','jenis' => 'JK'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Keterangan Kepala Pasar / Blokir kios','status' => 'tidak','jenis' => 'JK'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Lainnyaa','status' => 'tidak','jenis' => 'JK'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'BPKB','status' => 'tidak','jenis' => 'JKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Copy STNK','status' => 'tidak','jenis' => 'JKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Blanko Kuitansi pemilik BPKB & Copy KTP','status' => 'tidak','jenis' => 'JKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Bukti gesek No mesin & no rangka','status' => 'tidak','jenis' => 'JKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Bukti gesek No mesin & no rangka','status' => 'tidak','jenis' => 'JKB'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Bilyet deposito','status' => 'tidak','jenis' => 'DP'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Blokir Deposito','status' => 'tidak','jenis' => 'DP'),
                              array('no_aplikasi' => $no_aplikasi, 'judul' => 'Kuasa pencairan','status' => 'tidak','jenis' => 'DP')
                              
                            );
        return $dokumen;
    }
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
    public function getUbahAplikasi($no_ap){
        $data = $this->getDataAplikasi($no_ap);
        return view('ubah-aplikasi', $data);
    }
    public function getLihatAplikasi($no_ap){
        
        $data = $this->getDataAplikasi($no_ap);
        return view('lihat-aplikasi', $data);
    }
    public function getDataAplikasi($no_ap){
        $app = Aplikasi::where('no_aplikasi', $no_ap)->first();
        $mitraModel = new Mitra;
        $produks = new Produk;
        $cabangs = new Cabang;
        $dokumens = new Dokumen;
        // dokumen
        $dk_DI = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'DI'])->get();
        $dk_IHDU = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'IHDU'])->get();
        $dk_FKB = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'FKB'])->get();
        $dk_ETC = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'ETC'])->get();
        // dokumen pengikat
        $dpk_JTBT = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'JTBT'])->get();
        $dpk_JK = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'JK'])->get();
        $dpk_JKB = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'JKB'])->get();
        $dpk_DP = $dokumens->where(['no_aplikasi' => $app->no_aplikasi, 'jenis' => 'DP'])->get();




        //return;
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

        // dokumen ceklis
        $dokumen_ceklis = DokumenCeklis::where('no_aplikasi', $app->no_aplikasi)->first();
        // 
        $nap_dua = NapDua::where('no_aplikasi', $app->no_aplikasi)->first();
        $jaminan = Jaminan::where('no_aplikasi', $app->no_aplikasi)->get();
        $pemilik_jaminan = PemilikJaminan::where('no_aplikasi', $app->no_aplikasi)->get();
        //
        $memo_komite = MemoKomite::where('no_aplikasi', $app->no_aplikasi)->get();

        $rek_pers = RekPers::where('no_aplikasi', $app->no_aplikasi)->get();
        $data = compact('app', 
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
                        'labaRugi',
                        'dk_DI',
                        'dk_IHDU',
                        'dk_FKB',
                        'dk_ETC',
                        'dpk_JTBT',
                        'dpk_JK',
                        'dpk_JKB',
                        'dpk_DP',
                        'dokumen_ceklis',
                        'jaminan',
                        'pemilik_jaminan',
                        'nap_dua',
                        'memo_komite',
                        'rek_pers');
        return $data;
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
        $cabang_id = $cabangs->first()->id;
        $no_app = json_decode($this->getNoAplikasi($cabang_id))->result;
       
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
        $dokumen_ceklis = new DokumenCeklis;
        $dokumen = new Dokumen;
        $catatan = new Catatan;

        $memo_komite = new MemoKomite;
        $rek_pers = new RekPers;
        $jaminan = new Jaminan;
        $pemilik_jaminan = new PemilikJaminan;
        $nap_dua = new NapDua;

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
        // create nap dua
        $create_dokumen_ceklis = $dokumen_ceklis->create(['no_aplikasi' => $no_aplikasi]);
        $create_dokumen = $dokumen->insert($this->dokumen($no_aplikasi));

        $create_catatan = $catatan->insert($this->catatan($create_dokumen_ceklis->id));

        $create_nap_dua = $nap_dua->create(['no_aplikasi' => $no_aplikasi]);
        $create_jaminan = $jaminan->create(['no_aplikasi' => $no_aplikasi]);
        $create_memo_komite = $memo_komite->create(['no_aplikasi' => $no_aplikasi]);
        $create_jaminan_pemilik = $pemilik_jaminan->create(['no_aplikasi' => $no_aplikasi]);
       // $create_rek_pers = $rek_pers->create(['no_aplikasi' => $no_aplikasi]);

        return redirect()->route('lihat_ap', ['no_ap' => $no_aplikasi]);
    }
    public function getDataKtp(Request $request){
        $mitra = new Mitra;
        $no_ktp = $request->q;
        $data = $mitra->select('no_ktp AS no_ktp', 'nama_lengkap AS nama')->where('no_ktp','like','%' . $no_ktp . '%')->get();
        //$array = array(['text' => "Hello", 'slug' => 'hello', 'id' => '1'], ['text' => "World", 'slug' => 'world', 'id' => '2']);
        return response()->json($data);
    }
    public function getDaftarMitra(Request $request){
        $mitraModel = new Mitra;
        if ($request->has('q')) {
            $mitraModel = $mitraModel->where('nama_lengkap', 'like', '%' . $request->q . '%');
        }
       $mitras = $mitraModel->orderBy('nama_lengkap')->paginate(20);
       /*return $mitras;
        if ($request->has('q')) {
            $mitraModel = $mitraModel->where('nama_lengkap', 'like', '% '. $request->q .'%');
        }
        return dd($mitraModel->where('nama_lengkap','Siti')->get());
        $mitras = $mitraModel->orderBy('nama_lengkap')->get();*/
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
    public function tesah(){
        $dokumen = new Dokumen;
        $create_dokumen = $dokumen->insert($this->dokumen('291817253'));
        return $create_dokumen;
    }
}
