<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Barang;
use App\Models\Admin\BarangModel;
use App\Models\Admin\Toko;
use App\Models\Admin\TokoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTokoController extends Controller
{
    public function __construct()
    {
        $this->TokoModel = new TokoModel();
        $this->middleware(['auth']);
    }

    public function TOn()
    {
        $data = [
            'toko' => $this->TokoModel->toko(),
	    'hitung' => DB::table('toko')
            ->select('toko.id')
            ->get(),
        ];

        return view('admin.toko.tableToko', $data);
    }


    public function searchToko(Request $Request){
        $keyword=$Request->get('keyword');
        $toko = Toko::where("nama_toko", "like", "%$keyword%")->get();
        return view('admin.toko.tableToko',compact('toko'));
    }

    public function searchBarangToko(Request $Request, $referal){
        $keyword=$Request->get('keyword');
        $barang = Barang::where("nama_barang", "like", "%$keyword%")->where('referal', $referal)->get();
        $detailtoko = Toko::where('id_member', $referal)->get();
        return view('admin.toko.detailToko',compact('barang', 'detailtoko'));
    }


    public function Texpired()
    {
        return view('admin.toko.tableTokoExpired');
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
    public function show($referal)
    {
        $data = [
            'detailtoko' => $this->TokoModel->detailToko($referal),
            'barang' => $this->TokoModel->detailBarangDiToko($referal),
        ];

        return view('admin.toko.detailToko', $data);
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
            'dataToko' => $this->TokoModel->detailToko($referal)
        ];
        return view('admin.toko.editToko', $data);

        //return view('admin.toko.editToko', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,)
    {
        if ($request->img_toko <> "") {
          //$hapus_img = DB::table('toko')->where('id_member',$request->referal)->first();
          //unlink('foto_toko' .'/'. $hapus_img->img_toko);
            //update image
            $file = Request()->img_toko;
            $fileName =  Request()->id_member. $file->hashName();
            $file->move('foto_toko', $fileName);

            DB::table('toko')->where('id_member',$request->referal)->update([
                'img_toko' => $fileName,
                'nama_toko' => $request->nama_toko,
                'alamat_toko' => $request->alamat_toko,
                'deskripsi' => $request->deskripsi,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tokoaktif');
        }
        else{
            DB::table('toko')->where('id_member',$request->referal)->update([
                'nama_toko' => $request->nama_toko,
                'alamat_toko' => $request->alamat_toko,
                'deskripsi' => $request->deskripsi,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tokoaktif');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($referal)
    {
        $this->TokoModel->destroyData($referal);
        return redirect()->route('tokoAktif');
    }
}
