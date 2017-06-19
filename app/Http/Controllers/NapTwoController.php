<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jaminan;
use App\PemilikJaminan;
use App\MemoKomite;
use App\RekPers;
use Auth;
class NapTwoController extends Controller
{
    //
    public function tambahJaminan(Request $request){
    	$jaminan = new Jaminan;

    	$add_jaminan = $jaminan->create($request->all());
    	if ($add_jaminan) {
    		$msg = "Berhasil ditambahkan";
    		$type = "success";
    	} else {
    		$msg = "Gagal menambahkan";
    		$type = "danger";
    	}
    	return redirect()->back()->with(['msg' => $msg, 'type' => $type]);
    }
    public function tambahPemilikJaminan(Request $request){
    	$model = new PemilikJaminan;
    	$add_pmlk_jaminan = $model->create($request->all());

    	if ($add_pmlk_jaminan) {
    		$msg = "Berhasil ditambahkan";
    		$type = "success";
    	} else {
    		$msg = "Gagal menambahkan";
    		$type = "danger";
    	}
    	return redirect()->back()->with(['msg' => $msg, 'type' => $type]);
    }
    public function tambahRekPers(Request $request){
        $rekomen = new RekPers;
        $request->request->add(['user_id' => Auth::user()->id ]);
        $add_rekomen = $rekomen->create($request->all());
        if ($add_rekomen) {
            $msg = "Berhasil ditambahkan";
            $type = "success";
        } else {
            $msg = "Gagal menambahkan";
            $type = "danger";
        }
        return redirect()->back()->with(['msg' => $msg, 'type' => $type]);

    }
    public function tambahMemoKomite(Request $request){
    	$memo = new MemoKomite;
    	$tambah_memo = $memo->create($request->all());

    	if ($tambah_memo) {
    		$msg = "Berhasil ditambahkan";
    		$type = "success";
    	} else {
    		$msg = "Gagal menambahkan";
    		$type = "danger";
    	}
    	return redirect()->back()->with(['msg' => $msg, 'type' => $type]);
    }
    public function hapusMemo(Request $request){
        $id = $request->id;
        $memo = MemoKomite::find($id);
        if ($memo->delete()) {
            $msg = "Berhasil dihapus";
            $type = "success";
        } else {
            $msg = "Gagal menghapus";
            $type = "danger";
        }
        return redirect()->back()->with(['msg' => $msg, 'type' => $type]);
    }

    public function hapusPemilikJaminan(Request $request){
        $id = $request->id;
        $pemilik = PemilikJaminan::find($id);
        if ($pemilik->delete()) {
            $msg = "Berhasil dihapus";
            $type = "success";
        } else {
            $msg = "Gagal menghapus";
            $type = "danger";
        }
        return redirect()->back()->with(['msg' => $msg, 'type' => $type]);
    }
    public function hapusJaminan(Request $request){
        $id = $request->id;
        $jaminan = Jaminan::find($id);
        if ($jaminan->delete()) {
            $msg = "Berhasil dihapus";
            $type = "success";
        } else {
            $msg = "Gagal menghapus";
            $type = "danger";
        }
        return redirect()->back()->with(['msg' => $msg, 'type' => $type]);
    }
    public function hapusRekPers(Request $request){
        $id = $request->id;
        $rek_pers = RekPers::find($id);
        if ($rek_pers->delete()) {
            $msg = "Berhasil dihapus";
            $type = "success";
        } else {
            $msg = "Gagal menghapus";
            $type = "danger";
        }
        return redirect()->back()->with(['msg' => $msg, 'type' => $type]);
    }
    
}
