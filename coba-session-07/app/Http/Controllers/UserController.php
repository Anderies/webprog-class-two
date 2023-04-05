<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = User::latest()->get();
        // @dd($data);
        return view('users', compact('data'));
    }
}
