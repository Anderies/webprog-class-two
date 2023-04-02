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
    return view('home');
});

Route::get('/blog', function(){
    return view('home');
});
Route::get('/blog/tentang', function(){
    return view('tentang');
});
Route::get('/blog/kontak', function(){
    return view('kontak');
});

Route::get('/mahasiswa', function () {
    $nama = 'Glenys';
    $nilai = 75;
    return view('example.mahasiswa', compact('nama', 'nilai'));
});

Route::get('/genshin', function () {
    $characters = [
        ['name' => 'Qiqi', 'element' => 'Anemo', 'image' => 'qiqi.png'],
        ['name' => 'Diluc', 'element' => 'Pyro', 'image' => 'diluc.webp'],
        ['name' => 'Keqing', 'element' => 'Electro', 'image' => 'keqing.webp'],
        ['name' => 'Klee', 'element' => 'Pyro', 'image' => 'klee.webp']

    ];
    return view('example.genshin', compact('characters'));
});
