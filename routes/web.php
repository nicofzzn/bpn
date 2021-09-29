<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ViewController;
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
//rancangan awal//

//Guest//
Route::get('/', function () {
  return view('pengguna.beranda');
});
Route::get('/beritabpn', function () {
  $berita = Berita::latest()->get();
  return view('pengguna.beritabpn', compact('berita'));
});
Route::get('/detailberitabpn/{berita}', function (Berita $berita) {
  return view('pengguna.detailberitabpn', compact('berita'));
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
