<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MahasiswaController::class,'index']);
Route::get('/buat-session', [SessionController::class,'buatSession']);
Route::get('/akses-session', [SessionController::class,'aksesSession']);
Route::get('/hapus-session', [SessionController::class,'hapusSession']);
Route::get('/flash-session', [SessionController::class,'flashSession']);

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa'])->middleware('coba');
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tabelMahasiswa']);
Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa']);
