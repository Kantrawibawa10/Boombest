<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use App\Models\Admin\MemberModel;
use App\Models\Admin\Toko;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminMemberController extends Controller
{
    public function __construct()
    {
        $this->MemberModel = new MemberModel();
        $this->middleware(['auth']);
    }

    public function MOn()
    {
        $data = [
            'user' => DB::table('register')->join('users', 'users.id', '=', 'register.id_member')->where('register.paid_status', '1', 'register.tgl_daftar')->get(),

        ];

        return view('admin.member.tableMember', $data);
    }

    public function MPlatinum()
    {
        $data = [
            'user' => DB::table('register')->join('users', 'users.id', '=', 'register.id_member')->where('register.root_flag', '1', 'register.tgl_daftar')->get(),
        ];

        return view('admin.member.platinumMember', $data);
    }

    public function MBiasa()
    {
        $data = [
            'user' => DB::table('register')->join('users', 'users.id', '=', 'register.id_member')->where('register.root_flag', '0', 'register.tgl_daftar')->get(),
        ];

        return view('admin.member.biasaMember', $data);
    }

    public function Mproses()
    {
        $data = [
            'user' => DB::table('register')->join('users', 'users.id', '=', 'register.id_member')->where('register.tgl_expired')->get(),
        ];

        return view('admin.member.tableMemberExpired', $data);
    }

    // searchengine Controller setting
    public function searchMember(Request $Request){
        $keyword=$Request->get('keyword');
        $user = User::where("name", "like", "%$keyword%", "or", "username", "like", "%$keyword%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.member.tableMember',compact('user'));
    }

    public function namamember(Request $Request){
        $namamember=$Request->get('namamember');
        $user = User::where("name", "like", "%$namamember%", "or", "username", "like", "%$namamember%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.member.tableMember',compact('user'));
    }

    public function noregister(Request $Request){
        $noregister=$Request->get('noregister');
        $user = User::where("register_no", "like", "%$noregister%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.member.tableMember',compact('user'));
    }

    public function noreferal(Request $Request){
        $noreferal=$Request->get('noreferal');
        $user = User::where("reg_reff", "like", "%$noreferal%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.member.tableMember',compact('user'));
    }

    public function daftar(Request $Request){
        $daftar=$Request->get('daftar');
        $user = User::where("tgl_daftar", "like", "%$daftar%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.member.tableMember',compact('user'));
    }

    public function expired(Request $Request){
        $expired=$Request->get('expired');
        $user = User::where("tgl_expired", "like", "%$expired%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.member.tableMember',compact('user'));
    }

    public function group(Request $Request){
        $group=$Request->get('group');
        $user = User::where("root_flag", "like", "%$group%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.member.tableMember',compact('user'));
    }
    // searchengine Controller setting



    // public function Mexpired()
    // {
    //     return view('admin.member.tableMemberExpired');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$this->MemberModel->detailData($id)) {
            return view('404.error');
        }
        $data = [
            'user' => $this->MemberModel->detailData($id),
        ];

        return view('admin.member.editMember', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->image <> "") {
          //$hapus_img = DB::table('users')->where('id',$request->id)->first();
          //unlink('ktpMember' .'/'. $hapus_img->image);
            //update image
            $file = Request()->image;
            $fileName =  Request()->id . $file->hashName();
            $file->move('ktpMember', $fileName);                   

            DB::table('users')->where('id',$request->id)->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password,
                'alamat'=> $request->alamat,
                'referal'=> $request->referal,
                'image'=> $fileName,
                'nik'=> $request->nik,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'kota'=> $request->kota,
                'kecamatan'=> $request->kecamatan,
                'kabupaten'=> $request->kabupaten,
                'provinsi'=> $request->provinsi,
                'negara'=> $request->negara,
                'telp'=> $request->telp,
                'hp'=> $request->hp,
                'point_total'=> $request->point_total,
                'point_tarik'=> $request->point_tarik,
                'point_sisa'=> $request->point_sisa,
                'bank'=> $request->bank,
                'no_rek'=> $request->no_rek,
                'no_register'=> $request->no_register,
                'username'=> $request->username,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/memberaktif');
        }
        else
        {
            DB::table('users')->where('id',$request->id)->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password,
                'alamat'=> $request->alamat,
                'referal'=> $request->referal,
                'nik'=> $request->nik,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'kota'=> $request->kota,
                'kecamatan'=> $request->kecamatan,
                'kabupaten'=> $request->kabupaten,
                'provinsi'=> $request->provinsi,
                'negara'=> $request->negara,
                'telp'=> $request->telp,
                'hp'=> $request->hp,
                'point_total'=> $request->point_total,
                'point_tarik'=> $request->point_tarik,
                'point_sisa'=> $request->point_sisa,
                'bank'=> $request->bank,
                'no_rek'=> $request->no_rek,
                'no_register'=> $request->no_register,
                'username'=> $request->username,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/memberaktif');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->MemberModel->destroyData($id);
        return redirect()->route('memberAktif')->with('pesan','Data Berhasil Di Hapus !!!');
    }
}
