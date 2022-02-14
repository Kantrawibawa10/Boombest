<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'kode_admin'=>'required',
            'nama_admin'=>'required',
            'img_admin'=>'required',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed',
            'level'=>'required',
            'username'=>'required'
        ]);



        Admin::create([
            'kode_admin' => $request->kode_admin,
            'nama_admin' => $request->nama_admin,
            'img_admin' => $request->img_admin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'username' => $request->username
        ]);

        //auth()->attempt($request->only('username', 'password'));

        return view('dashboard');

    }
}
