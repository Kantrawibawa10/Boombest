<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Iklan;
use App\Models\Admin\IklanModel;
use App\Models\Admin\Toko;
use App\Models\Admin\TokoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Result;

class AdminIklanController extends Controller
{
    public function __construct()
    {
        $this->IklanModel = new IklanModel();
        $this->middleware(['auth']);
    }

    public function allIklan()
    {
        $data = [
            'dataIklan1'=> DB::table('iklan')->where('level', 'Home1')->get(),
            'dataIklan2'=> DB::table('iklan')->where('level', 'Home2')->get(),
            'dataIklan3'=> DB::table('iklan')->where('level', 'Home3')->get(),
            'dataIklan4'=> DB::table('iklan')->where('level', 'Home4')->get(),
            'dataIklanNew'=> DB::table('iklan')->where('level', 'New')->get(),
            'dataIklanCategory'=> DB::table('iklan')->where('level', 'Category')->get(),
	    'hitung' => DB::table('iklan')
            ->select('iklan.id')
            ->get(),
        ];

        return view('admin.iklan.tableIklan', $data);
    }

    public function searchIklan(Request $Request){
        $keyword=$Request->get('keyword');
        $dataIklan = Iklan::where("level", "like", "%$keyword%", "or", "link", "like", "%$keyword%")->get();
        return view('admin.iklan.tableIklan',compact('dataIklan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$data = [
            'dataIklan1'=> DB::table('iklan')->where('level', 'Home1')->get(),
            'dataIklan2'=> DB::table('iklan')->where('level', 'Home2')->get(),
            'dataIklan3'=> DB::table('iklan')->where('level', 'Home3')->get(),
            'dataIklan4'=> DB::table('iklan')->where('level', 'Home4')->get(),
            'dataIklan5'=> DB::table('iklan')->where('level', 'Home4')->get(),
            'dataIklanNew'=> DB::table('iklan')->where('level', 'New')->get(),
            'dataIklanCategory'=> DB::table('iklan')->where('level', 'Category')->get(),
        ];

        return view('admin.iklan.addIklan', $data);
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
            'iklanpict' => 'required|mimes:jpg,jpeg,bmp,png,gif',
            'level' => 'required',
            'link' => 'required',
            'description' => 'required',
            'date_add' => 'required',
            'date_end' => 'required',
        ]);

        //upload image
        $file = $request->iklanpict;
        $fileName =  $request->level . $file->hashName();
        $file->move('slider', $fileName);



        $data = [
            'iklanpict' => $fileName,
            'level' => $request->level,
            'link' => $request->link,
            'description' => $request->description,
            'date_add' => $request->date_add,
            'date_end' => $request->date_end,
        ];

        $this->IklanModel->addData($data);
        return redirect()->route('tableIklan')->with('success','Iklan Berhasil Di Tambah !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($level)
    {
        $data = [
            'dataIklan' => DB::table('iklan')->where('level', $level)->get(),
            'levelIklan' => DB::table('iklan')->select('level')->where('level', $level)->limit(1)->get(),

        ];

        return view('admin.iklan.dataIklan', $data);
    }

    public function detail($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'editIklan' => DB::table('iklan')->where('id', $id)->get(),
        ];

        return view('admin.iklan.editIklan', $data);
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
        if ($request->iklanpict <> "") {
            $hapus_img = DB::table('iklan')->where('id',$request->id)->first();
            unlink('slider' .'/'. $hapus_img->iklanpict);
            //update image
            $file = Request()->iklanpict;
            $fileName =  Request()->id . $file->hashName();
            $file->move('slider', $fileName);

            DB::table('iklan')->where('id',$request->id)->update([
                'iklanpict' => $fileName,
                'level' => $request->level,
                'link' => $request->link,
                'description' => $request->description,
                'date_add' => $request->date_add,
                'date_end' => $request->date_end,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tableiklan')->with('success','Iklan Berhasil Di Ubah !!!');
        }
        else
        {
            DB::table('iklan')->where('id',$request->id)->update([
                'level' => $request->level,
                'link' => $request->link,
                'description' => $request->description,
                'date_add' => $request->date_add,
                'date_end' => $request->date_end,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/tableiklan')->with('success','Iklan Berhasil Di Ubah !!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $hapus_img = DB::table('iklan')->where('id',$request->id)->first();
        unlink('slider' .'/'. $hapus_img->iklanpict);
        DB::table('iklan')->where('id', $id)->delete();
        return redirect('/tableiklan')->with('deleted','Iklan Berhasil Di Hapus !!!');
    }
}
