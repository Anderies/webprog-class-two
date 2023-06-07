<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //
    public function index(){
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</li>';
        echo '<li><a href=/akses-session>Akses Session</li>';
        echo '<li><a href=/hapus-session>Hapus Session</li>';
        echo '<li><a href=/flash-session>Flash Session</li>';
        echo '</ul>';
    }

    public function buatSession(Request $request){
        // 1: First Way to Create Session
        session(["hakAkses" => "admin", "nama" => "Jason Mraz"]);
        // 2: Second Way to Create Session
        // $request->session()->put("hakAkses","admin");
        // 3: Third Way to Create Session
        // Session::put('hakAkses', 'admin');
        return "Session sudah dibuat";
    }

    public function aksesSession(Request $request){
        echo Session::get('hakAkses');
        echo "<br>";
        echo Session::get('nama');
        echo "<hr>";

        echo $request->session()->get("hakAkses");
        echo "<br>";
        echo $request->session()->get("nama");
        echo "<hr>";
    }

    public function hapusSession(){
        session()->forget('hakAkses');
        return "Session hakAkses dihapus";
    }

    public function flashSession(){
        session()->flash('hakAkses','admin');
        echo "Flash session hakAkses has been created";
    }
}
