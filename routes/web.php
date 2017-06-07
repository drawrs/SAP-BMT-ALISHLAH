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

Route::get('/', 'MainController@coba');
Route::get('/dashboard', [
    'uses' => 'MainController@dashboard',
    ]);
Route::get('/tracking', [
    'uses' => 'MainController@tracking',
    ]);
Route::get('/lihat-aplikasi/{no_ap}', [
    'uses' => 'MainController@getLihatAplikasi',
    'as' => 'lihat_ap'
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
Route::get('/detail-mitra', [
    'uses' => 'MainController@getDetailMitra']);