<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TokoModel extends Model
{
    public function toko() {
        return DB::table('toko')
	->join('users', 'users.id', '=', 'toko.id_member')
        ->select('toko.*', 'users.name', 'users.telp', 'users.hp', 'users.id',)
        ->get();
    }

    public function detailToko($referal)
    {
        return DB::table('toko')->where('toko.id_member', $referal)->get();
    }

    public function detailBarangDiToko($referal)
    {
    return DB::table('toko')->where('toko.id_member', $referal)
            ->join('barang', 'barang.id_member', '=', 'toko.id_member')
            ->get();
    }

    public function destroyData($referal)
    {
        DB::table('toko')
            ->where('referal', $referal)
            ->delete();
    }
}
