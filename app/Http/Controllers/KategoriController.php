<?php

namespace App\Http\Controllers;

use App\Models\Admin\Barang;
use App\Models\BarangModel;
use App\Models\Kategori;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        $this->KategoriModel = new KategoriModel();
        $this->Kategori = new Kategori();
    }

    public function search(Request $Request, $kategori){
        $keyword=$Request->get('keyword');
        $barang = Barang::where("nama_barang", "like", "%$keyword%")->where('kategori', $kategori)->get();
        $kategori = Kategori::where('kategori', $kategori)->get();
        return view('detailkategori',compact('barang', 'kategori'));
    }

    public function index()
    {

        $data = [
            'kategori' => $this->KategoriModel->allKategori(),
            'dataIklanCategory'=> DB::table('iklan')->where('level', 'Category')->get(),
        ];

        return view('allcategory', $data);

    }

    public function detailkategori($kategori)
    {
        $barang=Barang::where('kategori',$kategori)->get();
        $kategori=Kategori::where('kategori',$kategori)->get();
        $dataIklan=DB::table('iklan')->where('level', 'Home2')->get();
        return view('detailkategori', compact('barang', 'kategori', 'dataIklan'));
    }
    public function detail($id)
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
}
