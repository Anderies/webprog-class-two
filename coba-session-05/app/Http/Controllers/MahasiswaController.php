<?php
namespace App\Http\Controllers;

class MahasiswaController extends Controller{

    function index(){
        $arrMahasiswa = ["JASONS JANUARD", "VIEREN CRISTIAN", "FELICIA FERREN"];

        return view('mahasiswa.index')->with('keyMahasiswa',$arrMahasiswa);
    }

    function create(){
        return view('mahasiswa.create');
    }
}
?>
