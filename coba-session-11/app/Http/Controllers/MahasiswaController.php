<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        echo '<ul>';
        echo '<li><a href=/daftar-mahasiswa>Daftar Mahasiswa</li>';
        echo '<li><a href=/tabel-mahasiswa>Tabel Mahasiswa</li>';
        echo '<li><a href=/blog-mahasiswa>Blog Mahasiswa</li>';
        echo '</ul>';
    }
    public function daftarMahasiswa(){
        return "Form Pendaftaran Mahasiswa";
    }

    public function tabelMahasiswa(){
        return "Tabel data Mahasiswa";
    }

    public function blogMahasiswa(){
        return "Halaman Blog Mahasiswa";
    }
}
