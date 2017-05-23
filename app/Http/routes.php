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

Route::get('/', 'indexController@index');
Route::get('/register', 'indexController@tambah');
Route::post('/register', 'indexController@daftar');
Route::get('/login', 'SessController@ins');
Route::post('/login', 'SessController@validas');
Route::get('/logout','SessController@logout');

Route::get('wisata', 'indexController@order');
Route::get('info/{wisata}', 'indexController@orderinfo');

Route::group(['middleware'=>'AuthSesion'], function(){

	Route::group(['middleware'=>'level:member'], function(){

		Route::group(['prefix'=>'/'], function(){
			Route::get('pesan/{wisata}', 'indexController@add');
			Route::post('pesan/add', 'indexController@save');
			Route::get('/saran', 'indexController@plus');
			Route::post('/saran', 'indexController@write');
		});

	});

	Route::group(['middleware'=>'level:admin'], function(){

		Route::group(['prefix' => 'admin'], function(){

			Route::get('/pengguna', 'penggunaController@index');
			Route::post('/pengguna/save', 'penggunaController@save');
			Route::get('/pengguna/tambah', 'penggunaController@tambah');
			Route::get('/pengguna/edit/{pengguna}','PenggunaController@edit');
			Route::post('/pengguna/edit/{pengguna}','PenggunaController@update');
			Route::get('/pengguna/lihat/{pengguna}','PenggunaController@lihat');
			Route::get('/pengguna/hapus/{pengguna}','PenggunaController@hapus');

			Route::get('/member', 'memberController@index');
			Route::post('/member/save', 'memberController@save');
			Route::get('/member/tambah', 'memberController@tambah');
			Route::get('/member/edit/{member}','memberController@edit');
			Route::post('/member/edit/{member}','memberController@update');
			Route::get('/member/lihat/{member}','memberController@lihat');
			Route::get('/member/hapus/{member}','memberController@hapus');

			Route::get('', 'adminsController@welcome');
			Route::get('/admins', 'adminsController@index');
			Route::post('/admins/save', 'adminsController@save');
			Route::get('/admins/tambah', 'adminsController@tambah');
			Route::get('/admins/edit/{admins}','adminsController@edit');
			Route::post('/admins/edit/{admins}','adminsController@update');
			Route::get('/admins/lihat/{admins}','adminsController@lihat');
			Route::get('/admins/hapus/{admins}','adminsController@hapus');

			Route::get('/saran', 'saranController@index');
			Route::get('/saran/hapus/{saran}','saranController@hapus');

			Route::get('/transportasi', 'transportasiController@index');
			Route::post('/transportasi/save', 'transportasiController@save');
			Route::get('/transportasi/tambah', 'transportasiController@tambah');
			Route::get('/transportasi/edit/{transportasi}','transportasiController@edit');
			Route::post('/transportasi/edit/{transportasi}','transportasiController@update');
			Route::get('/transportasi/lihat/{transportasi}','transportasiController@lihat');
			Route::get('/transportasi/hapus/{transportasi}','transportasiController@hapus');

			Route::get('/penginapan', 'penginapanController@index');
			Route::post('/penginapan/save', 'penginapanController@save');
			Route::get('/penginapan/tambah', 'penginapanController@tambah');
			Route::get('/penginapan/edit/{penginapan}','penginapanController@edit');
			Route::post('/penginapan/edit/{penginapan}','penginapanController@update');
			Route::get('/penginapan/lihat/{penginapan}','penginapanController@lihat');
			Route::get('/penginapan/hapus/{penginapan}','penginapanController@hapus');

			Route::get('/jenis_penginapan', 'jenis_penginapanController@index');
			Route::post('/jenis_penginapan/save', 'jenis_penginapanController@save');
			Route::get('/jenis_penginapan/tambah', 'jenis_penginapanController@tambah');
			Route::get('/jenis_penginapan/edit/{jenis_penginapan}','jenis_penginapanController@edit');
			Route::post('/jenis_penginapan/edit/{jenis_penginapan}','jenis_penginapanController@update');
			Route::get('/jenis_penginapan/lihat/{jenis_penginapan}','jenis_penginapanController@lihat');
			Route::get('/jenis_penginapan/hapus/{jenis_penginapan}','jenis_penginapanController@hapus');

			Route::get('/wisata', 'wisataController@index');
			Route::post('/wisata/save', 'wisataController@save');
			Route::get('/wisata/tambah', 'wisataController@tambah');
			Route::get('/wisata/edit/{wisata}','wisataController@edit');
			Route::post('/wisata/edit/{wisata}','wisataController@update');
			Route::get('/wisata/lihat/{wisata}','wisataController@lihat');
			Route::get('/wisata/hapus/{wisata}','wisataController@hapus');

			Route::get('/pesanan', 'pesananController@index');
			Route::get('/pesanan/edit/{pesanan}','pesananController@edit');
			Route::post('/pesanan/edit/{pesanan}','pesananController@update');
			Route::get('/pesanan/lihat/{pesanan}','pesananController@lihat');
			Route::get('/pesanan/hapus/{pesanan}','pesananController@hapus');

		});

	});

});