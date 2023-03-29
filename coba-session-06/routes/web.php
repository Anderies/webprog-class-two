<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
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

// Route::get('/', [MahasiswaController::class, 'cekObject']);
Route::get('/', [MahasiswaController::class, 'cekObject']);

Route::get('/insert', [MahasiswaController::class, 'insert']);
Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/get', [MahasiswaController::class, 'allView']);
Route::get('/filter', [MahasiswaController::class, 'filter']);
