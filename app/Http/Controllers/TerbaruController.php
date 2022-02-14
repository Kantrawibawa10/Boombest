<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerbaruController extends Controller
{
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {

        $new = [
            'terbaru' => $this->BarangModel->terbaru(),
            'wilayah' => DB::table('wilayah')->get(),
            'dataIklanNew'=> DB::table('iklan')->where('level', 'New')->get(),
        ];

        return view('terbaru', $new);

    }

    public  function  daerah($daerah)
    {
        $data = [
            'terbaru' => $this->BarangModel->terbaruDaerah($daerah),
            'wilayah' => DB::table('wilayah')->get(),
            'dataIklan'=> DB::table('iklan')->where('level', 'Home2')->get(),
	    'dataIklanNew'=> DB::table('iklan')->where('level', 'New')->get(),

        ];

        return view('terbaru', $data);
    }
}
