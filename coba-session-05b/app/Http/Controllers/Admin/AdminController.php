<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return "Halaman Home";
    }

    public function tampil()
    {
        $arrMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];
        $admin = true;
        return view('mahasiswa')->with('mahasiswa', "arrMahasiswa");
    }

    public function tampilCompat()
    {
        $arrMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];
        $admin = true;
        return view('mahasiswa', compact("admin"))->with('mahasiswa', $arrMahasiswa);
    }

    public function dummyCompact()
    {
        $arrMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];
        $admin = true;
        return view('dummy', compact("admin", "arrMahasiswa"));
        // return 'Test Dummy';
    }

    // Recomended
    public function dummyWith()
    {
        $arrMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];
        $admin = true;
        return view('dummy')->with(compact("admin", "arrMahasiswa"));
    }
}
