<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller{
    public function index(){
        return "Halaman Home";
    }

    public function tampil(){
        $arrMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];

        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}

?>
