<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {

        return view('auth.login');
    }

    public function store(Request $request)
    {
        $db = DB::table('users')->join('register', 'users.id', '=', 'register.id_member')->select('paid_status')->orderBy('users.id','DESC')->where('register.paid_status', '1')->first();
        $level = DB::table('users')->select('users.role')->orderBy('users.id','DESC')->where('username', $request->username)->first();

        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
        ]);


        if (!auth()->attempt($request->only('username', 'password'), $request->remember)){
            return back()->with('gagal', 'invalid login details');
        }

        if($db->paid_status and $level->role == 'member') {
            // auth()->attempt($request->only('username', 'password'));
            return redirect()->route('homepage')->with('login','Anda Berhasil Login');
        }elseif($db->paid_status and $level->role == 'admin') {
            // auth()->attempt($request->only('username', 'password'));
            return redirect()->route('dashboard')->with('login','Anda Berhasil Login');
        }elseif($db->paid_status and $level->role == 'pegawai') {
            // auth()->attempt($request->only('username', 'password'));
            return redirect()->route('dashboard')->with('login','Anda Berhasil Login');
        }elseif($db->paid_status and $level->role == 'creator') {
            // auth()->attempt($request->only('username', 'password'));
            return redirect()->route('dashboard')->with('login','Anda Berhasil Login');
        }    

    }
}
