<?php

use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\RealtimeDB;
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
Route::get('', [PhoneAuthController::class, 'index']);
Route::get('/home', [RealtimeDB::class, 'index']);
