<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use App\Models\Berita;

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
//Berita//
Route::get('/', [BeritaController::class, 'beranda']);

Route::get('/berita', [BeritaController::class, 'listBerita']);
Route::get('/berita/{berita}', [BeritaController::class, 'detail']);

//Prosedur Layanan//
Route::get('/layanan', function () {
  return view('pengguna.layanan');
});
Route::get('/lihat1', function () {
  return view('pengguna.lihatlayanan1');
});
Route::get('/lihat2', function () {
  return view('pengguna.lihatlayanan2');
});
Route::get('/lihat3', function () {
  return view('pengguna.lihatlayanan3');
});
Route::get('/lihat4', function () {
  return view('pengguna.lihatlayanan4');
});
Route::get('/lihat5', function () {
  return view('pengguna.lihatlayanan5');
});
Route::get('/lihat6', function () {
  return view('pengguna.lihatlayanan6');
});



//ContactUS
Route::get('/kontak', [ContactController::class, 'index']);
Route::post('/sendmessage', [ContactController::class, 'sendMessage'])->name('contactus.store');

//Admin//
Route::get('/login', [ViewController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');

Route::middleware(['auth'])->group(function () {
  Route::get('/logout', [UserController::class, 'logout']);
  Route::get('/admin/buatberita', [ViewController::class, 'buatberita']);
  Route::get('/admin/berita', [BeritaController::class, 'index']);
  Route::get('/admin/berita/{id}', [BeritaController::class, 'edit']);
  Route::post('/admin/berita', [BeritaController::class, 'store']);
  Route::put('/admin/berita/{id}', [BeritaController::class, 'update']);
  Route::get('/admin/berita/{id}/delete', [BeritaController::class, 'delete']);
});
