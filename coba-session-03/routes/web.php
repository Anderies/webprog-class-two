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
// www.example.com
Route::get('/', function () {
    return view('welcome');
});

// www.example.com/profile
Route::get('/profile', function () {
    return view('profile');
});
