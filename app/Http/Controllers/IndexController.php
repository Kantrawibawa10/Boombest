<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member\MemberModel;
use Illuminate\Support\Facades\DB;
use App\Models\Toko;
use App\Models\TokoModel;
use Auth;
class IndexController extends Controller
{
    public function __construct()
    {
        $this->MemberModel = new MemberModel();
	$this->TokoModel = new TokoModel();
    }

    public function index()
    {
	if (Auth::user()){
            $Exist_toko = Toko::where('id_member', Auth::user()->id)->first();
        }else{
            $Exist_toko=null;
        }

	$data = [
            'toko' => $this->TokoModel->toko(),
            'Exist_toko'=>$Exist_toko,
        ];



        return view('mobile.homepage', $data);

    }

    public function merchant()
    {
        return view('mobile.merchant');
    }

    public function barcode()
    {
        return view('mobile.scanbarcode');
    }



   public function poin()
    {
        $data=[
            'dataPoin' => DB::table('register')->join('users', 'users.id', '=', 'register.id_member')->where('register.id_member', auth()->user()->id)->get(),

	    'totalPoin' => DB::table('register')
            ->join('users', 'users.id', '=', 'register.id_member')
            // ->join('point', 'point.register_no', '=', 'register.register_no')
            ->where('register.id_member', auth()->user()->id)
            // ->select('point.register_no')
          ->select('register.point_reg','register.point_sisa','register.point_tarik')
            ->get(),
       
        // 'sisaPoin' => DB::table('register')
        //     ->join('users', 'users.id', '=', 'register.id_member')
        //     ->join('point_tarik', 'point_tarik.register_no', '=', 'register.register_no')
        //     ->where('register.id_member', auth()->user()->id)
        //     ->select('point_tarik.point_out')
        //     ->get(),
        ];
        return view('mobile.poin', $data);
    }

    public function info()
    {
        return view('mobile.info');
    }

    public function member()
    {
         $referal = DB::table('register')->where('id_member',Auth::user()->id)->first();
        return view('mobile.user',compact('referal'));
    }


    public function edit($id)
    {
        if (!$this->MemberModel->detailData($id)) {
            return view('404.error');
        }
        $data = [
            'user' => $this->MemberModel->detailData($id),
        ];

	$referal = DB::table('register')->where('id_member',Auth::user()->id)->first();
        return view('mobile.editprofile', $data, compact('referal') );
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


     //profile member
     public function update(Request $request, $id)
     {
         if ($request->image_profile <> "") {
            $hapus_img = DB::table('users')->where('id',$request->id)->first();
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
             return redirect('/user');
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
             return redirect('/user');
         }
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
