<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);

Route::post('/submit', [UserController::class, 'store'])->name('submit');

Route::get('/generate-image', [UserController::class, 'indexTwo']);
Route::post('/generate-image', [UserController::class, 'storeTwo'])->name('generate-image');
