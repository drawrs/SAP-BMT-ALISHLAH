<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mitra;
use App\Alamat;
use App\Catatan;
use App\Dokumen;
class MitraController extends Controller
{
    //
    public function postUbahMitra(Request $request){
        $result = $request->all();
        // update tab 2
        $mitra = Mitra::find($request->mitra_id);

        $alamat = Alamat::where('mitra_id', $mitra->id);

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
        return redirect()->back();
    }
    public function getTambahMitra()
    {
        $mitraModel = new Mitra;
        return view('mitra.tambah', compact('mitraModel'));
    }
    public function postTambahMitra(Request $request){
        $result = $request->all();
        // update tab 2
        $mitra = new Mitra;

        $alamat = new Alamat;

        $alamat_temp = makeAlamat($result['tab2_alamat1'], $result['tab2_alamat2'],$result['tab2_alamat3'], $result['tab2_alamat4'], $result['tab2_alamat5'], $result['tab2_alamat6'], $result['tab2_alamat7'], $result['tab2_alamat8'], $result['tab2_alamat9'], $result['tab2_alamat10'], $result['tab2_alamat11'], $result['tab2_alamat12'], $result['tab2_alamat13'], $result['tab2_alamat14']);
        $alamat_asal = $alamat_temp['asal'];
        $alamat_ktp = $alamat_temp['ktp'];
        $updateMitra = $mitra->create([ 
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
        $mitra_id = $updateMitra->id;
        $updateAlamat = $alamat->create(['mitra_id' => $mitra_id, 'alamat_sekarang' => $alamat_asal, 'alamat_ktp' => $alamat_ktp]);

        return redirect()->back();
    }
    public function getHapusMitra($id){
        $mitra = Mitra::find($id);
        if ($mitra->delete()) {
            $status = '';
        } else {
            $status = '';
        }
        return redirect('mitra');
    }
}
