<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //

    public function filter(){
        $mahasiswas = Mahasiswa::where('ipk','<','3')->orderBy('nama','desc')->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }
    public function cekObject(){
        $mahasiswa = new Mahasiswa();

        dump($mahasiswa);
    }

    public function insert(){
        $mahasiswa = new Mahasiswa;

        $mahasiswa->nim = '19003036';
        $mahasiswa->nama = 'Sari Citra Lestari';
        $mahasiswa->tanggal_lahir = '2001-12-31';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();

        dump($mahasiswa);
    }
//  Delete Data Base on with ID = 1
    public function delete(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->delete();

        dump($mahasiswa);
    }
//  Update Data Base on with ID = 1
    public function update(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tanggal_lahir = '2001-01-01';
        $mahasiswa->ipk = 2.9;
        $mahasiswa->save();
        dump($mahasiswa);
    }
//
    public function allView(){
        $mahasiswas = Mahasiswa::all();

        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }
}
