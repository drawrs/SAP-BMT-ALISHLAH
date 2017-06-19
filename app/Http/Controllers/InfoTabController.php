<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aplikasi;
use App\Mitra;
use App\Alamat;
use App\Keuangan;
use App\LkmPC;
use App\KonPK;
use App\NapSatu;
use App\DokumenCeklis;
use App\LabaRugi;
use App\NapDua;
class InfoTabController extends Controller
{
    //
    public function updateAplikasi(Request $request){
        $result = $request->isi;
        if ($request->has('lkm_pc')) {
            $lkm_pc = LkmPC::find($request->id);
            $lkm_pc->update($request->all());
            return "dah apdet";
        }
        if ($request->has('kon_kp')) {
            $data = $request->data;
            $kpk = KonPK::find($data['id']);
            $update_kpk = $kpk->update(['hbng' => $data['tab4_hbng'],
                                    'kl_baik' => $data['tab4_kl_baik'],
                                    'krkt_baik' => $data['tab4_krkt_baik'],
                                    'lkm_pc_id' => $data['tab4_lkm_pc_id'],
                                    'lm_hbng' => $data['tab4_lm_hbng'],
                                    'nama' => $data['tab4_nama'],
                                    'telp' => $data['tab4_telp']]);
            /*$lkm_pc = $lkm_pc->update(['tujuan_pb' =>  $data['tab4_tujuan_pb'], 'penjelasan' => $data['tab4_penjelasan'] ]);*/
            return $data;
        }
        $app = Aplikasi::where('no_aplikasi', $result['tab1_no_app']);
        $mitra = Mitra::find($app->first()->mitra_id);
        $alamat = Alamat::where('mitra_id', $app->first()->mitra_id);
        $keuangan = Keuangan::where('mitra_id', $app->first()->mitra_id);
        $napOne = NapSatu::where('no_aplikasi', $result['tab1_no_app']);
        $dokumenCeklis = DokumenCeklis::where('no_aplikasi', $result['tab1_no_app']);
        $labaRugi = LabaRugi::where('no_aplikasi', $result['tab1_no_app']);
        $nap_dua = NapDua::where('no_aplikasi', $result['tab1_no_app']);
        //return $keuangan->first();
       //return $result['tab2_alamat1'];
        // update tab 1
        if (mro() !== 'disabled') {
            $update_tab_1 = $app->update([
                'produk_id' => $result['tab1_produk_id'],
                'nominal_pb' => $result['tab1_nominal_pb'],
                'tanggal' =>     toDate($result['tab1_tanggal']),
                'cabang_id' =>     $result['tab1_cabang_id'],
                'kode_sro' =>     $result['tab1_kode_sro'],
                'perkenalan' =>     $result['tab1_perkenalan'],
                'nama_sro' =>     $result['tab1_nama_sro'],
                'saran' => $result['tab1_saran']
            ]);
             $alamat_temp = makeAlamat($result['tab2_alamat1'], $result['tab2_alamat2'],$result['tab2_alamat3'], $result['tab2_alamat4'], $result['tab2_alamat5'], $result['tab2_alamat6'], $result['tab2_alamat7'], $result['tab2_alamat8'], $result['tab2_alamat9'], $result['tab2_alamat10'], $result['tab2_alamat11'], $result['tab2_alamat12'], $result['tab2_alamat13'], $result['tab2_alamat14']);
            $alamat_asal = $alamat_temp['asal'];
            $alamat_ktp = $alamat_temp['ktp'];
            $updateAlamat = $alamat->update(['alamat_sekarang' => $alamat_asal, 'alamat_ktp' => $alamat_ktp]);
            $updateMitra = $mitra->update([ 
                                            'jumlah_tanggungan' => $result['tab2_jumlah_tanggungan'], 
                                            'nama_ibu' => $result['tab2_nama_ibu'],
                                            'nama_lengkap' => $result['tab2_nama_lengkap'], 
                                            'nama_panggilan' => $result['tab2_nama_panggilan'], 
                                            'nama_pasangan' => $result['tab2_nama_pasangan'], 
                                            'jk' => $result['tab2_jk'],
                                            'no_ktp' => $result['tab2_no_ktp'], 
                                            'no_telp' => $result['tab2_no_telp'],
                                            'pendidikan' => $result['tab2_pendidikan'], 
                                            'status_kawin' => $result['tab2_status_kawin'], 
                                            'tgl_aktif_ktp' => toDate($result['tab2_tgl_aktif_ktp']), 
                                            'tgl_lahir' => toDate($result['tab2_tgl_lahir']), 
                                            'tgl_lahir_pasangan' => toDate($result['tab2_tgl_lahir_pasangan'])
                                        ]);
        }
        if (feo() !== 'disabled') {
             // update tab 3
                $updateKeuangan = $keuangan->update(['alamat' => $result['tab3_alamat'],
                                    'bidang_usaha' => $result['tab3_bidang_usaha'],
                                    'kecamatan' => $result['tab3_kecamatan'],
                                    'nama_usaha' => $result['tab3_nama_usaha'],
                                    'no_npwp' => $result['tab3_no_npwp'],
                                    'telepon' => $result['tab3_telepon'],
                                    'kode_pos' => $result['tab3_kode_pos'],
                                    'tipe_pendapatan' => $result['tab3_tipe_pendapatan'],
                                    'tujuan_pb' => $result['tab3_tujuan_pb'],
                                    'tujuan_pb_detail' => $result['tab3_tujuan_pb_detail']]);
                $update = $app->update([
                    /*sebagian dari tab 5*/
                    'rekomen_pb' => $result['tab5_rekomen_pb'],
                    'waktu_pb' => $result['tab5_waktu_pb'],
                    'margin_pb' => $result['tab5_margin_pb'],
                    'angs_pb' => $result['tab5_angs_pb']
                    ]);
                // tab 5
                $updateNapOne = $napOne->update([
                    'adm_ush' => $result['tab5_adm_ush'],
                    'jns_prdk' => $result['tab5_jns_prdk'],
                    'ktg_thd_pl' => $result['tab5_ktg_thd_pl'],
                    'ktg_thd_sp' => $result['tab5_ktg_thd_sp'],
                    'lm_ush' => $result['tab5_lm_ush'],
                    'ps_usaha' => $result['tab5_ps_usaha'],
                    'rkn_sjnk' => $result['tab5_rkn_sjnk'],
                    'rkn_smpn' => $result['tab5_rkn_smpn'],
                    'rpt_ush' => $result['tab5_rpt_ush'],
                    'rwyt_hbng_lbg' => $result['tab5_rwyt_hbng_lbg'],
                    'tmpt_tgl' => $result['tab5_tmpt_tgl'],
                    'tmpt_ush' => $result['tab5_tmpt_ush'],
                    'usia' => $result['tab5_usia'],
                    'wly_pmsrn' => $result['tab5_wly_pmsrn']
                    ]);
                // update laba rugi 
                $updateLabaRugi = $labaRugi->update(['catatan' => $result['tab5_catatan'],
                                                    'jml_angs' => $result['tab5_jml_angs'],
                                                    'lb_rg' => $result['tab5_lb_rg'],
                                                    'income' => $result['tab5_income']]);
                $updateNaoTwo = $nap_dua->update([
                                'htng_kwjb' => $result['tab5_htng_kwjb'],
                                'hbng_tg' => $result['tab5_hbng_tg'],
                                'kgtn_ibdh' => $result['tab5_kgtn_ibdh'],
                                'hbng_tk' => $result['tab5_hbng_tk'],
                                'rmh_tg' => $result['tab5_rmh_tg'],
                                'kmsyrktn' => $result['tab5_kmsyrktn'],
                                'pnk_akad' => $result['tab5_pnk_akad'],
                                'biaya_pc' => $result['tab5_biaya_pc'],
                                'pnk_jaminan' => $result['tab5_pnk_jaminan']
                            ]);
        }
        if (mro_legal() !== 'disabled') {
           $update = $dokumenCeklis->update([
                                'tgl_satu' => toDate($result['tab6_tgl_satu']),
                                'mark_satu' => $result['tab6_mark_satu'],
                                'nama_satu' => $result['tab6_nama_satu'],
                                'jabatan_satu' => $result['tab6_jabatan_satu'],
                                'tgl_dua' => toDate($result['tab6_tgl_dua']),
                                'mark_dua' => $result['tab6_mark_dua'],
                                'nama_dua' => $result['tab6_nama_dua'],
                                'jabatan_dua' => $result['tab6_jabatan_dua']
                            ]);
        }
        if (pincab() !== 'disabled') {
            return "ini pincab";
        }
   
        // update tab 2
       
       
        
        
        return "Data telah di perbaharui !";

        /*$result = array(['status' => $update]);
        return $request->all();
        return response()->json($result);*/
    }
}
