<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Barang;
use App\Models\Admin\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBarangController extends Controller
{

    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        $this->middleware(['auth']);
    }

    public function index()
    {
       
	    $alldata=DB::table('barang')->join('toko', 'toko.id_member', '=', 'barang.id_member')
             ->join('users', 'users.id', '=', 'barang.id_member')
 	     ->join('kategori', 'kategori.kategori', '=', 'barang.kategori')
             ->select('barang.*', 'users.name', 'users.telp', 'users.hp', 'users.id', 'toko.id', 'toko.nama_toko', 'toko.alamat_toko', 'kategori.nama', 'barang.id',)
	     ->get();

	    $datakategori=DB::table('kategori')
            ->get();

	    $wilayah=DB::table('wilayah')->get(); 
      
        return view('admin.barang.tableBarang', compact('alldata', 'datakategori', 'wilayah'));
    }
    
    //search controller
    public function search(Request $Request){
	$wilayah=DB::table('wilayah')->get();
	$datakategori=DB::table('kategori')->get();
        $keyword=$Request->get('keyword');
        $alldata = Barang::where("nama_barang", "like", "%$keyword%")->join('toko', 'toko.id_member', '=', 'barang.id_member')
	->join('kategori', 'kategori.kategori', '=', 'barang.kategori')->get();
        return view('admin.barang.tableBarang',compact('alldata', 'datakategori', 'wilayah'));
    }

    public function namabarang(Request $Request){
	$wilayah=DB::table('wilayah')->get();
	$datakategori=DB::table('kategori')->get();
        $namabarang=$Request->get('namabarang');
        $alldata = Barang::where("nama_barang", "like", "%$namabarang%")->join('toko', 'toko.id_member', '=', 'barang.id_member')
	->join('kategori', 'kategori.kategori', '=', 'barang.kategori')->get();
        return view('admin.barang.tableBarang',compact('alldata', 'datakategori', 'wilayah'));
    }

    public function namatoko(Request $Request){
	$wilayah=DB::table('wilayah')->get();
	$datakategori=DB::table('kategori')->get();
        $namatoko=$Request->get('namatoko');
        $alldata = Barang::where("nama_toko", "like", "%$namatoko%")->join('toko', 'toko.id_member', '=', 'barang.id_member')
	->join('kategori', 'kategori.kategori', '=', 'barang.kategori')->get();
        return view('admin.barang.tableBarang',compact('alldata', 'datakategori', 'wilayah'));
    }

    public function harga(Request $Request){
	$wilayah=DB::table('wilayah')->get();
	$datakategori=DB::table('kategori')->get();
        $harga=$Request->get('harga');
        $alldata = Barang::where("harga", "like", "%$harga%")->join('toko', 'toko.id_member', '=', 'barang.id_member')
	->join('kategori', 'kategori.kategori', '=', 'barang.kategori')->get();
        return view('admin.barang.tableBarang',compact('alldata', 'datakategori', 'wilayah'));
    }

    public function kategoribarang(Request $Request){
	$wilayah=DB::table('wilayah')->get();
	$datakategori=DB::table('kategori')->get();
        $kategoribarang=$Request->get('kategoribarang');
        $alldata = Barang::where("kategori", "like", "%$kategoribarang%")->join('toko', 'toko.id_member', '=', 'barang.id_member')->get();

        return view('admin.barang.tableBarang',compact('alldata', 'datakategori', 'wilayah'));
    }

    public function wilayahbarang(Request $Request){
	$wilayah=DB::table('wilayah')->get();
	$datakategori=DB::table('kategori')->get();
        $wilayahbarang=$Request->get('wilayahbarang');
        $alldata = Barang::where("daerah", "like", "%$wilayahbarang%")->join('toko', 'toko.id_member', '=', 'barang.id_member')->get();

        return view('admin.barang.tableBarang',compact('alldata', 'datakategori', 'wilayah'));
    }


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
            'data' => $this->BarangModel->detailData($id),
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
        if (!$this->BarangModel->detailData($id)) {
            return view('404.error');
        }
        $data = [
            'inputkategori' => $this->BarangModel->allKategori(),
            'inputwilayah' => DB::table('wilayah')->get(),
            'barang' => $this->BarangModel->dataBarang($id),
        ];

        return view('admin.barang.editBarang', $data);
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
            return redirect('/tablebarang');
        }
        else
        {
            DB::table('barang')->where('id',$request->id)->update([
                'nama_barang' => $request->nama_barang,
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
            return redirect('/tablebarang');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $barang = $this->BarangModel->detailData($id);
        if ($request->img_barang <> "") {
            unlink('products' .'/'. $request->img_barang);
        }
        $this->BarangModel->destroyData($id);
        return redirect()->route('tableBarang')->with('pesan','Data Berhasil Di Hapus !!!');
    }



}
