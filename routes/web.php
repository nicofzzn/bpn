<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//rancangan awal//

//Guest//
Route::get('/', function () {
  return view('pengguna.beranda');
});
Route::get('/beritabpn', function () {
  return view('pengguna.beritabpn');
});
Route::get('/detailberitabpn', function () {
  return view('pengguna.detailberitabpn');
});

Route::get('/infolayanan', function () {
  return view('pengguna.infolayanan');
});
Route::get('/detailinfolayanan', function () {
  return view('pengguna.detailinfolayanan');
});
Route::get('/kontak', function () {
  return view('pengguna.kontak');
});


//Admin//
Route::get('/login', function () {
  return view('admin.login ');
});
Route::get('/admin', function () {
  return view('admin.index');
});
Route::get('/buatberita', function () {
  return view('admin.buatberita');
});
Route::get('/editberita', function () {
  return view('admin.editberita');
});
Route::post('/editberita', function (Request $request) {
  dd($request);
});
