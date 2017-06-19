<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;
use App\Catatan;
class DokumenController extends Controller
{
    //
    public function updateDokumen(Request $request){
        $dokumen = new Dokumen;
        if ($request->type == 'dk') {
            foreach ($request->data as $id => $val) {
                $dokumen->find($id)
                        ->update(['status' => $val]);
            }
        } elseif ($request->type == 'dpk') {
            $dokumen->where('no_aplikasi', $request->no_app)
                    ->whereIn('jenis', ['JTBT', 'JK', 'JKB', 'DP'])->update(['status' => 'tidak']);

            $update_id = array();
            if (count($request->data) <= 0) {
                return "nothing checked";
            }
            foreach ($request->data as $id => $val) {
                $update_id[] =$id;
            }
            $dokumen->whereIn('id', $update_id)
                    ->update(['status' => 'ya']);

            // update status konfirmasi
            $konfirmasi_id = array();
            foreach ($request->konfirmasi as $id => $val) {
                $konfirmasi_id[] =$id;
            }
            $dokumen->whereIn('id', $konfirmasi_id)
                    ->update(['valid' => 'ya']);
            return "true";
        }
        return;
    }
    public function updateJudulDokumen(Request $request){
        $dokumen = Dokumen::find($request->id);
        if (is_null($dokumen)) {
            return;
        }
        $dokumen->update(['judul' => $request->judul]);
        return "updated!";
    }
    public function updateCatatan(Request $request){
        $catatan = new Catatan;
        foreach ($request->data as $id => $val) {
                $catatan->find($id)
                        ->update(['isi' => $val]);
            }
        return "true";
    }
    public function tambahDokumen(Request $request){
        $dokumen = new Dokumen;
        $dokumen->create($request->all());
        return redirect()->back();
    }
    public function hapusDokumen(Request $request){
        $id = $request->id;
        $dokumen = Dokumen::find($id);
        if ($dokumen->delete()) {
            $msg = "Berhasil dihapus";
            $type = "success";
        } else {
            $msg = "Gagal menghapus";
            $type = "danger";
        }
        return redirect()->back()->with(compact('msg', 'type'));
    }
}
