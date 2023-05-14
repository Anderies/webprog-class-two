<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UploadImagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Explain Form
// Route::get('/', [MahasiswaController::class, 'index']);
Route::post('/proses-form', [MahasiswaController::class, 'prosesForm']);


// CRUD
Route::get('/mahasiswas', [MahasiswaController::class, 'indexTwo'])->name('mahasiswas.index');
Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');

// Read
Route::get('/mahasiswas/{id}', [MahasiswaController::class, 'show'])
->name('mahasiswas.show');

Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
->name('mahasiswas.edit');

Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update']);

Route::delete('/mahasiswas/{id}/delete', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');

