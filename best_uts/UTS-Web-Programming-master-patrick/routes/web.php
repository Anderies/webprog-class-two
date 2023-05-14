<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\TransactionController;

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

Route::get('/{id}', [UserController::class, 'home']);
Route::get('/{id}/Espresso', [CoffeeController::class, 'espresso']);
Route::get('/{id}/Brewed', [CoffeeController::class, 'brewed']);
Route::get('/{id}/Blended', [CoffeeController::class, 'blended']);
Route::get('/{id}/Non-Coffee', [CoffeeController::class, 'nonCoffee']);
Route::get('/{id}/transactions', [TransactionController::class, 'transactions']);
Route::post('/buy', [TransactionController::class, 'buyCoffee'])->name('buy');
