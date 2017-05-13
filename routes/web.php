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
