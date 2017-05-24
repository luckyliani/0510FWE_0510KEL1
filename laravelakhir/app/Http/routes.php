<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','sesicontroller@form');
Route::post('/login','sesicontroller@validasi');
Route::get('/logout','sesicontroller@logout');
Route::get('/','sesicontroller@index');

Route::group(['middleware'=>'AutentifikasiUser'], function ()
{
Route::get('admin', 'adminController@awal');
Route::get('admin/tambah', 'adminController@tambah');
Route::get('admin/{admin}', 'adminController@lihat');
Route::post('admin/simpan', 'adminController@simpan');
Route::get('admin/edit/{admin}', 'adminController@edit');
Route::post('admin/edit/{admin}', 'adminController@update');
Route::get('admin/hapus/{admin}', 'penggunaController@hapus');

Route::get('pengguna', 'penggunaController@awal');
Route::get('pengguna/tambah', 'penggunaController@tambah');
Route::get('pengguna/{pengguna}', 'penggunaController@lihat');
Route::post('pengguna/simpan', 'penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'penggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'penggunaController@hapus');

Route::get('jadwal', 'jadwalController@awal');
Route::get('jadwal/tambah', 'jadwalController@tambah');
Route::get('jadwal/{jadwal}', 'jadwalController@lihat');
Route::post('jadwal/simpan', 'jadwalController@simpan');
Route::get('jadwal/edit/{jadwal}', 'jadwalController@edit');
Route::post('jadwal/edit/{jadwal}', 'jadwalController@update');
Route::get('jadwal/hapus/{jadwal}', 'jadwalController@hapus');

Route::get('rute', 'ruteController@awal');
Route::get('rute/tambah', 'ruteController@tambah');
Route::get('rute/{rute}', 'ruteController@lihat');
Route::post('rute/simpan', 'ruteController@simpan');
Route::get('rute/edit/{rute}', 'ruteController@edit');
Route::post('rute/edit/{rute}', 'ruteController@update');
Route::get('rute/hapus/{rute}', 'ruteController@hapus');

Route::get('supir', 'supirController@awal');
Route::get('supir/tambah', 'supirController@tambah');
Route::get('supir/{supir}', 'supirController@lihat');
Route::post('supir/simpan', 'supirController@simpan');
Route::get('supir/edit/{supir}', 'supirController@edit');
Route::post('supir/edit/{supir}', 'supirController@update');
Route::get('supir/hapus/{supir}', 'supirController@hapus');

Route::get('kelas', 'kelasController@awal');
Route::get('kelas/tambah', 'kelasController@tambah');
Route::get('kelas/{kelas}', 'kelasController@lihat');
Route::post('kelas/simpan', 'kelasController@simpan');
Route::get('kelas/edit/{kelas}', 'kelasController@edit');
Route::post('kelas/edit/{kelas}', 'kelasController@update');
Route::get('kelas/hapus/{kelas}', 'kelasController@hapus');

Route::get('mobil', 'mobilController@awal');
Route::get('mobil/tambah', 'mobilController@tambah');
Route::get('mobil/{mobil}', 'mobilController@lihat');
Route::post('mobil/simpan', 'mobilController@simpan');
Route::get('mobil/edit/{mobil}', 'mobilController@edit');
Route::post('mobil/edit/{mobil}', 'mobilController@update');
Route::get('mobil/hapus/{mobil}', 'kelasController@hapus');

Route::get('paket', 'paketController@awal');
Route::get('paket/tambah', 'paketController@tambah');
Route::get('paket/{paket}', 'paketController@lihat');
Route::post('paket/simpan', 'paketController@simpan');
Route::get('paket/edit/{paket}', 'paketController@edit');
Route::post('paket/edit/{paket}', 'paketController@update');
Route::get('paket/hapus/{paket}', 'paketController@hapus');
	
Route::get('member', 'memberController@awal');
Route::get('member/tambah', 'memberController@tambah');
Route::get('member/{member}', 'memberController@lihat');
Route::post('member/simpan', 'memberController@simpan');
Route::get('member/edit/{member}', 'memberController@edit');
Route::post('member/edit/{member}', 'memberController@update');
Route::get('member/hapus/{member}', 'memberController@hapus');

Route::get('transaksi', 'transaksiController@awal');
Route::get('transaksi/tambah', 'transaksiController@tambah');
Route::get('transaksi/{transaksi}', 'transaksiController@lihat');
Route::post('transaksi/simpan', 'transaksiController@simpan');
Route::get('transaksi/edit/{transaksi}', 'transaksiController@edit');
Route::post('transaksi/edit/{transaksi}', 'transaksiController@update');
Route::get('transaksi/hapus/{transaksi}', 'transaksiController@hapus');
});

Route::get('/', function () {
    return view('welcome');
});