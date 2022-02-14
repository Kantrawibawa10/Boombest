<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\IklanModel;
use App\Models\Admin\Kategori;
use App\Models\Admin\KategoriModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminKategoriController extends Controller
{
    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
        $this->middleware(['auth']);
    }

    public function searchKategori(Request $Request){
        $keyword=$Request->get('keyword');
        $allKategori = Kategori::where("kategori", "like", "%$keyword%", "or", "nama", "like", "%$keyword%")->get();
        return view('admin.kategori.tableCategory',compact('allKategori'));
    }

    public function index()
    {
        $data = [
          'allKategori' => $this->KategoriModel->allKategori(),
        ];

        return view('admin.kategori.tableCategory', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required',
            'nama' => 'required',
	    'level' => 'required',
            'img_kategori' => 'nullable|mimes:jpg,jpeg,bmp,png,gif'

        ]);

        if ($request->img_toko <> " ") {
            //update image
            $file = $request->img_kategori;
            $fileName =  $request->id . $file->hashName();
            $file->move('foto_kategori', $fileName);

            $data = [
                'kategori' => $request->kategori,
                'nama' => $request->nama,
		'level' => $request->level,
                'img_kategori' => $fileName,
            ];

            $this->KategoriModel->addKategori($data);
        }
        else{
            $data = [
                'kategori' => $request->kategori,
                'nama' => $request->nama,
		'level' => $request->level,
            ];

            $this->KategoriModel->addKategori($data);
        }

        return redirect()->route('tableCategory')->with('pesan','Toko Berhasil Di Buat !!!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
        return redirect('/tablecategory');
    }
}
