<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MahasiswaController extends Controller
{
    //
    public function pendafataranID(){
        App::setlocale('id');
        return view('welcome');
    }

    public function pendafataranEN(){
        App::setLocale('en');
        return view('welcome');
    }

    public function pendaftaran($locale){
        App::setLocale($locale);
        return view('welcome');
    }
}
