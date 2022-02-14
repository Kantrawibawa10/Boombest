<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Admin\Barang;
use App\Models\Member\BarangModel;
use App\Models\Member\TokoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberBarangController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        $this->TokoModel = new TokoModel();
    }

    public function index()
    {
        $data = [
            'barang' => $this->BarangModel->allData(),
            'notif' => DB::table('notification')->limit(5)->join('users', 'users.id', '=', 'notification.id_member')->orderby('notification.id', 'DESC')->get(),
        ];

        return view('member.barang.produksaya', $data);
    }


    public function search(Request $Request){
        $keyword=$Request->get('keyword');
        $barang = Barang::where("nama_barang", "like", "%$keyword%")->get();
        return view('member.barang.produksaya',compact('barang'));
    }


    public function add()
    {
        $data = [
            'inputkategori' => $this->BarangModel->allKategori(),
            'inputwilayah' => DB::table('wilayah')->get(),
            'notif' => DB::table('notification')->limit(5)->join('users', 'users.id', '=', 'notification.id_member')->orderby('notification.id', 'DESC')->get(),
        ];

        return view('member.barang.tambahproduk', $data);
    }


    public function create(Request $request)
    {
        $this->validate($request, [
            'id_member' => 'required',
            'img_barang' => 'required|mimes:jpg,jpeg,bmp,png,gif',
            'nama_barang' => 'required',
	    'instagram' => 'required',
	    'link_ig' => 'required',
	    'facebook' => 'required',
	    'link_fb' => 'required',
	    'wa' => 'required',
            'harga' => 'required',
            'berat' => 'required',
            'kondisi' => 'required',
            'kategori' => 'required',
            'daerah' => 'required',
            'spesifikasi' => 'required',
            'keunggulan' => 'required',
            'garansi' => 'required',
            'lainnya' => 'required',

        ]);

        //upload image
        $file = $request->img_barang;
        $fileName =  $request->id. $file->hashName();
        $file->move('products', $fileName);

        $data = [
            'id_member' => $request->id_member,
            'img_barang' => $fileName,
            'nama_barang' => $request->nama_barang,
	    'instagram' => $request->instagram,
	    'link_ig' => $request->link_ig,
	    'facebook' => $request->facebook,
	    'link_fb' => $request->link_fb,
	    'wa' => $request->wa,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'kondisi' => $request->kondisi,
            'kategori' => $request->kategori,
            'daerah' => $request->daerah,
            'spesifikasi' => $request->spesifikasi,
            'keunggulan' => $request->keunggulan,
            'garansi' => $request->garansi,
            'lainnya' => $request->lainnya
        ];

        $this->BarangModel->addData($data);
        return redirect()->route('produksaya')->with('success','Produk Berhasil Di Tambahkan !!!');
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
            'notif' => DB::table('notification')->join('users', 'users.id', '=', 'notification.id_member')->orderby('notification.id', 'DESC')->limit(5)->get(),
        ];
        return view('member.barang.detailproduk', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$this->BarangModel->detailData($id)) {
            return view('404.error');
        }
        $data = [
            'inputkategori' => $this->BarangModel->allKategori(),
            'inputwilayah' => DB::table('wilayah')->get(),
            'barang' => $this->BarangModel->dataBarang($id),
        ];

        return view('member.barang.editproduk', $data);
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


        if ($request->img_barang <> "") {
            $hapus_img = DB::table('barang')->where('id',$request->id)->first();
            unlink('products' .'/'. $hapus_img->img_barang);
            //update image
            $file = Request()->img_barang;
            $fileName =  Request()->id . $file->hashName();
            $file->move('products', $fileName);


            DB::table('barang')->where('id',$request->id)->update([
                'img_barang' => $fileName,
                'nama_barang' => $request->nama_barang,
	        'instagram' => $request->instagram,
	    	'link_ig' => $request->link_ig,
	    	'facebook' => $request->facebook,
	    	'link_fb' => $request->link_fb,
		'wa' => $request->wa,
                'harga' => $request->harga,
                'kondisi' => $request->kondisi,
                'berat' => $request->berat,
                'kategori' => $request->kategori,
                'daerah' => $request->daerah,
                'spesifikasi' => $request->spesifikasi,
                'keunggulan' => $request->keunggulan,
                'garansi' => $request->garansi,
                'lainnya' => $request->lainnya,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/produksaya')->with('success','Produk Berhasil Di Update !!!');
        }
        else
        {
            DB::table('barang')->where('id',$request->id)->update([
                'nama_barang' => $request->nama_barang,
		'instagram' => $request->instagram,
	    	'link_ig' => $request->link_ig,
	    	'facebook' => $request->facebook,
	    	'link_fb' => $request->link_fb,
		'wa' => $request->wa,
                'harga' => $request->harga,
                'kondisi' => $request->kondisi,
                'berat' => $request->berat,
                'kategori' => $request->kategori,
                'daerah' => $request->daerah,
                'spesifikasi' => $request->spesifikasi,
                'keunggulan' => $request->keunggulan,
                'garansi' => $request->garansi,
                'lainnya' => $request->lainnya,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/produksaya')->with('success','Produk Berhasil Di Update !!!');
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
        $barang = $this->BarangModel->detailData($id);
        if ($barang->img_barang <> "") {
            unlink('products' .'/'. $barang->img_barang);
        }
	
        $this->BarangModel->destroyData($id);
        return redirect()->route('produksaya')->with('deleted','Produk Berhasil Di Hapus !!!');
    }
}
