<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        // return "Table mahasiswa disini";
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        dump($validateData);

        echo $validateData['nim'];  echo "<br>";
        echo $validateData['nama'];  echo "<br>";
        echo $validateData['email'];  echo "<br>";
        echo $validateData['jenis_kelamin'];  echo "<br>";
        echo $validateData['jurusan'];  echo "<br>";
        echo $validateData['alamat'];  echo "<br>";
    }

    public function indexTwo(){
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
        // return "Tabel Mahasiswa Disini";

    }

    public function create(){
        return view('form-pendaftaran-two');
    }

    public function show(Request $request){
        // dump();
        $data = Mahasiswa::where('id', '=', $request->id)->first();
        // dump($data);
        return view('mahasiswa.show', ['mahasiswa' => $data]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:10',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);


        // dump($validateData);

        // Coding Simpan Database
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->email = $validateData['email'];
        $mahasiswa->jenis_kelamin = $validateData['jenis_kelamin'];
        $mahasiswa->jurusan = $validateData['jurusan'];
        $mahasiswa->alamat = $validateData['alamat'];
        $mahasiswa->save();

        // return "Data berhasil di input ke database";
        return redirect()->route('mahasiswas.index');

    }

    public function edit(Mahasiswa $mahasiswa){
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa){
        $validateData = $request->validate([
            'nim' => 'required|size:10|unique:mahasiswas',
            'nama' => 'required|min:3|max:50',
            'email' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        // dump($validateData);
        Mahasiswa::where('id',$mahasiswa->id)->update($validateData);

        return redirect()->route('mahasiswas.index')->with('pesan', "update {$validateData['nama']} berhasil");
    }

    public function destroy(Request $request){
        // dump($request->id);
        $mahasiswa = Mahasiswa::where('id',$request->id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('pesan', "data id {{$request->id}} berhasil di delete");
    }




}
