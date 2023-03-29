<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    function create()
    {
        $keyMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];
        $admin = true;
        return view('mahasiswa.index')->with(compact("admin", "keyMahasiswa"));
    }

    function index()
    {
        $keyMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];
        $admin = false;
        return view('mahasiswa.index')->with(compact("admin", "keyMahasiswa"));
    }
}
