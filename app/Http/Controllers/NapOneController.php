<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendapatan;
use App\Pengeluaran;
use App\Neraca;
class NapOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function updatePendapatan(Request $request){
        $pdp = new Pendapatan;
        $result = null;
        $error = 0;
       // return $request->all();
        foreach($request->judul as $key => $val){
            $judul = $val;
            $isi = $request->isi[$key];
            $result = $pdp->create(['no_aplikasi' => $request->no_app, 'judul' => $judul, 'isi' => $isi, 'tipe' => $request->tipe]);
            if($result){
                $error += 0;
            } else {
                $error += 1;
            }
        }
        if ($error == 0){
            $msg = "Berhasil ditambahkan";
        } else {
            $msg = "Terjadi kesalahan!";
        }
        return $msg;
    }
    public function hapusPendapatan(Request $request){
      
        $pdp = Pendapatan::find($request->id);
        if($pdp->delete()){
            $msg = "Berhasil dihapus";
        } else {
            $msg = "Gagal dihapus";
        }
        return $msg;
    }

    public function updatePengeluaran(Request $request){
        $pdp = new Pengeluaran;
        $result = null;
        $error = 0;
       //return $request->all();
        foreach($request->judul as $key => $val){
            $judul = $val;
            $isi = $request->isi[$key];
            $result = $pdp->create(['no_aplikasi' => $request->no_app, 'judul' => $judul, 'isi' => $isi, 'tipe' => $request->tipe]);
            if($result){
                $error += 0;
            } else {
                $error += 1;
            }
        }
        if ($error == 0){
            $msg = "Berhasil ditambahkan";
        } else {
            $msg = "Terjadi kesalahan!";
        }
        return $msg;
    }
    public function hapusPengeluaran(Request $request){
      
        $pngl = Pengeluaran::find($request->id);
        if($pngl->delete()){
            $msg = "Berhasil dihapus";
        } else {
            $msg = "Gagal dihapus";
        }
        return $msg;
    }
    public function updateNeraca(Request $request){
        $nrc = new Neraca;
        $result = null;
        $error = 0;
       // return $request->all();
        foreach($request->judul as $key => $val){
            $judul = $val;
            $isi = $request->isi[$key];
            $result = $nrc->create(['no_aplikasi' => $request->no_app, 'judul' => $judul, 'isi' => $isi, 'tipe' => $request->tipe]);
            if($result){
                $error += 0;
            } else {
                $error += 1;
            }
        }
        if ($error == 0){
            $msg = "Berhasil ditambahkan";
        } else {
            $msg = "Terjadi kesalahan!";
        }
        return $msg;
        
    }
    public function hapusNeraca(Request $request){
      
        $pngl = Neraca::find($request->id);
        if($pngl->delete()){
            $msg = "Berhasil dihapus";
        } else {
            $msg = "Gagal dihapus";
        }
        return $msg;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
