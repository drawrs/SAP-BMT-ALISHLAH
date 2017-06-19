<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 Route::get('/ubah-aplikasi/{no_ap}', [
        'uses' => 'MainController@getUbahAplikasi',
        'as' => 'ubah_ap'
        ]);
 Route::get('/lihat-aplikasi/{no_ap}', [
        'uses' => 'MainController@getLihatAplikasi',
        'as' => 'lihat_ap'
        ])->middleware('komite');
Route::get('/cektest', function(){
    return 'Hello world';
})->middleware('komite');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'MainController@dashboard');
    Route::get('/dashboard', [
        'uses' => 'MainController@dashboard',
        ]);
    Route::get('/tracking', [
        'uses' => 'MainController@tracking',
        ]);
    
    Route::post('/update-pendapatan', [
        'uses' => 'NapOneController@updatePendapatan',
        ]);
    Route::any('/hapus-pendapatan', [
        'uses' => 'NapOneController@hapusPendapatan',
        ]);
    Route::post('/update-pengeluaran', [
        'uses' => 'NapOneController@updatePengeluaran',
        ]);
    Route::any('/hapus-pengeluaran', [
        'uses' => 'NapOneController@hapusPengeluaran',
        ]);
    Route::post('/update-neraca', [
        'uses' => 'NapOneController@updateNeraca',
        ]);
    Route::any('/hapus-neraca', [
        'uses' => 'NapOneController@hapusNeraca',
        ]);
    Route::any('/update-aplikasi', [
        'uses' => 'InfoTabController@updateAplikasi',
        ]);
    Route::any('/tes',function(){
        $arr = array(['nama' => "rizal", 'kelas' => "12"]);
        $data = json_encode($arr);
        echo $data;
    });

    Route::post('/update-lkm-one', [
        'uses' => 'LkmOneController@updateLkm',
        ]);


    Route::get('/tambah-aplikasi', [
        'uses' => 'MainController@getTambahAplikasi',
        'as' => 'tambah_ap'
        ]);
    Route::post('/tambah-aplikasi', [
        'uses' => 'MainController@postTambahAplikasi',
        'as' => 'post.tambah_ap'
        ]);
    Route::get('/get-data-ktp', [
        'uses' => 'MainController@getDataKtp']);

    Route::get('/hapus-aplikasi/{id}', [
        'uses' => 'MainController@getHapusApp',
        'as' => 'hapus_ap']);

    Route::get('/mitra', [
        'uses' => 'MainController@getDaftarMitra']);


    Route::get('/tambah-mitra', [
        'uses' => 'MitraController@getTambahMitra']);
    Route::post('/tambah-mitra', [
        'uses' => 'MitraController@postTambahMitra']);

    Route::get('/detail-mitra', [
        'uses' => 'MainController@getDetailMitra']);
    Route::post('/ubah-mitra', [
        'uses' => 'MitraController@postUbahMitra']);
    Route::get('/hapus-mitra/{id}', [
        'uses' => 'MitraController@getHapusMitra']);
    Route::any('/update-dokumen', 'DokumenController@updateDokumen');
    Route::any('/update-catatan', 'DokumenController@updateCatatan');

    Route::get('/akun', 'AkunController@index');
    Route::post('/get-akun', 'AkunController@getAkun');
    Route::post('/ubah-akun', 'AkunController@postUbahAkun');
    Route::post('/ubah-sandi', 'AkunController@postUbahSandi');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/array', 'MainController@tesah');

Route::post('/update-nama-dokumen', 'DokumenController@updateJudulDokumen');

Route::post('/tambah-jaminan', 'NapTwoController@tambahJaminan');
Route::post('/tambah-pemilik-jaminan', 'NapTwoController@tambahPemilikJaminan');
Route::post('/tambah-memo', 'NapTwoController@tambahMemoKomite');
Route::get('/hapus-memo', 'NapTwoController@hapusMemo');
Route::get('/hapus-data-pemilik', 'NapTwoController@hapusPemilikJaminan');

Route::any('/get-no-aplikasi/{kode}', 'MainController@getNoAplikasi');

Route::post('/tambah-dokumen', 'DokumenController@tambahDokumen');
Route::get('/hapus-dokumen', 'DokumenController@hapusDokumen');

Route::get('/hapus-jaminan', 'NapTwoController@hapusJaminan');

Route::post('/tambah-rek-pers', 'NapTwoController@tambahRekPers');

Route::get('/hapus-rek-pers', 'NapTwoController@hapusRekPers');
