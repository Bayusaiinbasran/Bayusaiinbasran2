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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::get('/kategori_artikel', 'kategoriArtikelcontroller@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/{id}', 'kategoriArtikelcontroller@show')->name('kategori_artikel.show');

Route::get('/kategori_berita', 'kategoriBeritacontroller@index')->name('kategori_berita.index');
Route::get('/kategori_berita/{id}', 'kategoriBeritacontroller@show')->name('kategori_berita.show');

Route::get('/kategori_galeri', 'KategoriGalericontroller@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/{id}', 'KategoriGalericontroller@show')->name('kategori_galeri.show');

Route::get('/kategori_pengumuman', 'KategoriPengumumancontroller@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/{id}', 'KategoriPengumumancontroller@show')->name('kategori_pengumuman.show');
