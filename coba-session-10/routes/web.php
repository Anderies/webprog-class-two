<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/pendaftaran/id', [MahasiswaController::class, 'pendafataranID']);
Route::get('/pendaftaran/en', [MahasiswaController::class, 'pendafataranEN']);

Route::get('/{locale?}', [MahasiswaController::class, 'pendaftaran']);
