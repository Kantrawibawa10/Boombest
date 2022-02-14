<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use App\Models\Admin\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPoinController extends Controller
{
    public function __construct() {
	$this->MemberModel = new MemberModel();
        $this->middleware(['auth']);
    }

    //search table point
    public function searchPoint(Request $Request){
        $keyword=$Request->get('keyword');
        $users = User::where("name", "like", "%$keyword%", "or", "username", "like", "%$keyword%")->get();
        return view('admin.point.tablePoint',compact('users'));
    }

    public function namamember(Request $Request){
        $namamember=$Request->get('namamember');
        $users = User::where("name", "like", "%$namamember%", "or", "username", "like", "%$namamember%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.point.tablePoint',compact('users'));
    }

    public function noregister(Request $Request){
        $noregister=$Request->get('noregister');
        $users = User::where("register_no", "like", "%$noregister%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.point.tablePoint',compact('users'));
    }

    public function noreferal(Request $Request){
        $noreferal=$Request->get('noreferal');
        $users = User::where("reg_reff", "like", "%$noreferal%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.point.tablePoint',compact('users'));
    }

    public function daftar(Request $Request){
        $daftar=$Request->get('daftar');
        $users = User::where("tgl_daftar", "like", "%$daftar%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.point.tablePoint',compact('users'));
    }

    public function expired(Request $Request){
        $expired=$Request->get('expired');
        $users= User::where("tgl_expired", "like", "%$expired%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.point.tablePoint',compact('users'));
    }

    public function group(Request $Request){
        $group=$Request->get('group');
        $users = User::where("root_flag", "like", "%$group%")->join('register', 'users.id', '=', 'register.id_member')->get();
        return view('admin.point.tablePoint',compact('users'));
    }

	

    public function index()
    {
        $data = [
            'users' => DB::table('register')
            ->join('users', 'users.id', '=', 'register.id_member')
	    ->where('register.paid_status', '1')
            ->get(),

            // 'point' => DB::table('register')
            // ->select( 'users.role', 'users.image', 'users.username', 'users.image_profile', 'users.name',
            // 'users.email', 'users.nik', 'users.bank', 'users.hp', 'users.no_rek', 'users.alamat', 'users.id', 'register.register_no',
            // 'register.reg_reff', 'register.id_member', 'point.reg_point')
            // ->join('users', 'users.id', '=', 'register.id_member',)
            // ->join('point', 'point.register_no', '=', 'register.register_no')
            // ->get(),

            'pointTotal' => DB::table('register')
            ->select( 'register.id', 'point.*')
            ->join('point', 'point.register_no', '=', 'register.register_no')
            ->get(),


        ];
        return view('admin.point.tablePoint', $data);
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
    public function edit(Request $request, $referal)
    {

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
        //
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
