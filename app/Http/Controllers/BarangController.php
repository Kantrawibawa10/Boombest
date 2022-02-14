<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangModel;
use App\Models\Toko;
use App\Models\TokoModel;
use App\Models\IklanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{

    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        $this->TokoModel = new TokoModel();
        $this->IklanModel = new IklanModel();
    }

    public function index(Request $request)
    {

        if (Auth::user()){
            $Exist_toko = Toko::where('id_member', Auth::user()->id)->first();
        }else{
            $Exist_toko=null;
        }

        $data = [
            'toko' => $this->TokoModel->toko(),
            'Exist_toko'=>$Exist_toko,
            // 'barang' =>  $barang,
            'trending' => $this->BarangModel->trending(),
            'pilihanHariIni' => $this->BarangModel->pilihanHariIni(),
            'rekomendasi' => $this->BarangModel->rekomendasi(),
            'lainnya'=> $this->BarangModel->lainnya(),
            'kategorihome'=> $this->BarangModel->kategorihome(),
            'kategorihomeslide'=> $this->BarangModel->kategorihomeslide(),
            // 'dataIklan'=> $this->IklanModel->allIklan(),
            'dataIklan1'=> DB::table('iklan')->where('level', 'Home1')->get(),
            'dataIklan2'=> DB::table('iklan')->where('level', 'Home2')->get(),
            'dataIklan3'=> DB::table('iklan')->where('level', 'Home3')->get(),
            'dataIklan4'=> DB::table('iklan')->where('level', 'Home4')->get(),
        ];

        return view('home', $data);
    }

    public function search(Request $Request){
        $keyword=$Request->get('keyword');
        $barang = Barang::where("kategori", "like", "%$keyword%")->orderby('barang.id', 'DESC')->get();
        $barang = Barang::where("daerah", "like", "%$keyword%")->orderby('barang.id', 'DESC')->get();
        $barang = Barang::where("nama_barang", "like", "%$keyword%")->orderby('barang.id', 'DESC')->get();
        return view('resultSearch',compact('barang'));
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
            'detailLainnya'=> $this->BarangModel->detailLainnya(),
            'barang' => $this->BarangModel->detailData($id),
            'inputkategori' => $this->BarangModel->allKategori(),
        ];
        return view('produkdetail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
