<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{nama}', function($nama){
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/products/{nama_product}', function($nama){
    // return "Tampilkan data product $nama";
    return view('product.index',['nama' => $nama]);
});

Route::get('/hubungi-kami', function(){
    return '<h1>Hubungi Kami</h1>';
});

Route::redirect('/contact-us', '/hubungi-kami');

// Route::get('/admin/mahasiswa', function () {
//     return "<h1>Daftar Mahasiswa</h1>";
// });

// Route::get('/admin/dosen', function () {
//     return "<h1>Daftar Dosen</h1>";
// });

// Route::get('/admin/karyawan', function () {
//     return "<h1>Daftar Karyawan</h1>";
// });

Route::prefix('/admin')->group(function(){
    Route::get('/mahasiswa', function(){
        return "<h1>Daftar Mahasiswa</h1>";
    });

    Route::get('/dosen', function(){
        return "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function(){
        return "<h1>Daftar Karyawan</h1>";
    });
});
