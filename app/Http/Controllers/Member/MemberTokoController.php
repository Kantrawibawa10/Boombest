<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member\Barang;
use App\Models\Member\BarangModel;
use App\Models\Member\Toko;
use App\Models\Member\TokoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class MemberTokoController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        $this->TokoModel = new TokoModel();
    }

    public function search(Request $Request, $referal){
        $keyword=$Request->get('keyword');
        $barang = Barang::where("nama_barang", "like", "%$keyword%")->where('id_member', $referal)->paginate(12);
        $toko = Toko::where('id_member', $referal)->get();
        return view('member.toko.tokosaya',compact('barang', 'toko'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'toko' => $this->TokoModel->mytoko(),
            'barang' => $this->BarangModel->allData(),
            'notif' => DB::table('notification')->limit(5)->join('users', 'users.id', '=', 'notification.id_member')->orderby('notification.id', 'DESC')->get(),
        ];

        return view('member.toko.tokosaya', $data);
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
        if (!$this->BarangModel->detailData($id)) {
            return view('404.error');
        }
        $data = [
            'barang' => $this->BarangModel->detailData($id),
            'inputkategori' => $this->BarangModel->allKategori(),
        ];
        return view('member.barang.detailproduk', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($referal)
    {
        if (!$this->TokoModel->detailToko($referal)) {
            return view('404.error');
        }

        $data = [
            'mytoko' => $this->TokoModel->detailToko($referal)
        ];
        return view('member.toko.edittoko', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $referal)
    {
        if ($request->img_toko <> "") {
          //$hapus_img = DB::table('toko')->where('id_member',$request->referal)->first();
          //unlink('foto_toko' .'/'. $hapus_img->img_toko);

            //update image
            $file = Request()->img_toko;
            $fileName =  Request()->id_member. $file->getClientOriginalName();
            $file->move('foto_toko', $fileName);

            DB::table('toko')->where('id_member',$request->referal)->update([
                'img_toko' => $fileName,
                'nama_toko' => $request->nama_toko,
                'alamat_toko' => $request->alamat_toko,
                'deskripsi' => $request->deskripsi,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tokosaya')->with('success','Toko Berhasil Di Ubah !!!');
        }
        else{
            DB::table('toko')->where('id_member',$request->referal)->update([
                'nama_toko' => $request->nama_toko,
                'alamat_toko' => $request->alamat_toko,
                'deskripsi' => $request->deskripsi,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tokosaya')->with('success','Toko Berhasil Di Ubah !!!');
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
