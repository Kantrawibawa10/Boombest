<?php

namespace App\Http\Controllers;

use App\Models\Admin\Barang;
use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function toko($referal)
    {
        $tokoall=Toko::where('id_member',$referal)->get();
        $barangall=Barang::where('id_member',$referal)->paginate(12);

        return view('toko', compact('tokoall', 'barangall'));
        //return $referal;
    }

    public function search(Request $Request, $referal){
        $keyword=$Request->get('keyword');
        $barangall = Barang::where("nama_barang", "like", "%$keyword%")->where('id_member', $referal)->paginate(12);
        $tokoall = Toko::where('id_member', $referal)->get();
        return view('toko',compact('barangall', 'tokoall'));
    }

}
