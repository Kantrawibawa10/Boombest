<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member\BarangModel;
use App\Models\Member\MemberModel;
use App\Models\Member\Toko;
use App\Models\Member\TokoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Auth;
class MemberController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        $this->TokoModel = new TokoModel();
        $this->MemberModel = new MemberModel();
        $this->Toko = new Toko();
        $this->middleware(['auth']);
    }

    // buat toko
    public function cekreferal($referal)
    {

      $data=Toko::where('id_member',$referal)->get();

      if (!isset($data)) {
        return view('member.dashboard');
      } else {
        return view('buattoko');
      }

        return $referal;

    }

    public function buattoko()
    {
        return view('buattoko');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
          'id_member' => 'required',
          'img_toko' => 'nullable|mimes:jpg,jpeg,bmp,png,gif',
          'nama_toko' => 'required',
          'alamat_toko' => 'required',
          'deskripsi' => 'nullable',
        ]);

        $post = new Toko();
        $post->id_member= $request->id_member;
        $post->nama_toko = $request->nama_toko;
        $post->alamat_toko = $request->alamat_toko;
        $post->deskripsi = $request->deskripsi;
        if ($request->hasFile('img_toko')) {
            $img_toko = $request->file('img_toko');
            $name = rand(1000, 9999) . $img_toko->getClientOriginalName();
            $img_toko->move('foto_toko', $name);
            $post->img_toko = $name;
        }
        $post->save();
        return redirect('/dashboard')->with('success', 'Tambah Data Berhasil');
    }
    //buat toko end


    public function index()
    {
      $data = [
        'notif' => DB::table('notification')->limit(5)->join('users', 'users.id', '=', 'notification.id_member')->orderby('notification.id', 'DESC')->get(),
      ];
        return view('member.dashboard', $data);
    }
    public function profile()
    {
      $data = [
        'notif' => DB::table('notification')->limit(5)->join('users', 'users.id', '=', 'notification.id_member')->orderby('notification.id', 'DESC')->get(),
       
      ];
        return view('member.profile', $data);
    }

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

        return view('member.editprofile', $data);
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
        if ($request->image_profile <> "") {
            //$hapus_img = DB::table('users')->where('id',$request->id)->first();
            //unlink('profPicMember' .'/'. $hapus_img->image_profile);
            //update image
            $file = Request()->image_profile;
            $fileName =  Request()->id . $file->hashName();
            $file->move('profPicMember', $fileName);

            DB::table('users')->where('id',$request->id)->update([                
		'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password,
                'alamat'=> $request->alamat,
                'referal'=> $request->referal,
                'image_profile'=> $fileName,
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
            return redirect('/profile')->with('success', 'Profile Berhasil di Perbarui');
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
            return redirect('/profile')->with('success', 'Profile Berhasil di Perbarui');
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
        //
    }
}
