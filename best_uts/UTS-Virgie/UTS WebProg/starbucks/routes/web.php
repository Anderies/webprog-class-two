<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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
Route::get('/', [UserController::class,'index1']);
Route::get('/{id}', [UserController::class,'index']);
Route::get('/{id}/transaction', [TransactionController::class,'index']);
Route::get('/{id}/coffee', [ProductsController::class,'index'])->name("coffee");
Route::post('/{id}/add', [TransactionController::class,'add']);
