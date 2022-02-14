<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\AdminModel;
use App\Models\Admin\Iklan;
use App\Models\Admin\Member;
use App\Models\Admin\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->MemberModel = new MemberModel();
        $this->middleware(['auth']);
    }

    public function profileAdmin()
    {
        return view('admin.profileAdmin');
    }

    public function tableAdmin()
    {
        
	$admin = DB::table('users')->where('role', 'admin')->get();
	$pegawai = DB::table('users')->where('role', 'pegawai')->get();
	$creator = DB::table('users')->where('role', 'creator')->get();
        return view('admin.tableAdmin', compact('admin', 'pegawai', 'creator'));
    }

    public function searchAdmin(Request $Request){
        $keyword=$Request->get('keyword');
        $admin = User::where("name", "like", "%$keyword%", "or", "username", "like", "%$keyword%")->get();
        return view('admin.tableAdmin',compact('admin', 'pegawai', 'creator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addAdmin');
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
        if (!$this->AdminModel->detailData($id)) {
            return view('404.error');
        }
        $data = [
            'data' => $this->AdminModel->detailData($id),
        ];
        return view('admin.barang.detailBarang', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$this->AdminModel->detailDataAdmin($id)) {
            return view('404.error');
        }
        $data = [
            'user' => $this->AdminModel->detailDataAdmin($id),
        ];
        return view('admin.editAdmin', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->image_profile <> "") {
            //$hapus_img = DB::table('users')->where('id',$request->id)->first();
            //unlink('profPicMember' .'/'. $hapus_img->image_profile);
            //update image
            $file = Request()->image_profile;
            $fileName =  Request()->id . $file->hashName();
            $file->move('profPicMember', $fileName);

            DB::table('users')->where('id',$request->id)->update([
                'name' => $request->name,
                'image_profile'=> $fileName,
                'password' => $request->password,
                'role' => $request->role,
                'username' => $request->username,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tableadmin');
        }
        else
        {
            DB::table('users')->where('id',$request->id)->update([
                'name' => $request->name,
                'password' => $request->password,
                'role' => $request->role,
                'username' => $request->username,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tableadmin');
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
        $this->AdminModel->destroyData($id);
        return redirect()->route('tableAdmin')->with('pesan','Data Berhasil Di Hapus !!!');
    }
}
