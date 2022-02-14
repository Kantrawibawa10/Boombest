<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BarangModel extends Model
{
    // all data from table kategori
    public function allKategori()
    {
        return DB::table('kategori')->get();
    }


    public function dataBarang($id)
    {
        return DB::table('barang')->where('barang.id', $id)->get();
    }

    // all data from table barang
    public function allData()
    {
        return DB::table('barang')->join('toko', 'toko.id_member', '=', 'barang.id_member')
        ->join('users', 'users.id', '=', 'barang.id_member')
	->join('kategori', 'kategori.kategori', '=', 'barang.kategori')
        ->select('barang.*', 'users.name', 'users.telp', 'users.hp', 'users.id', 'toko.id', 'toko.nama_toko', 'toko.alamat_toko', 'kategori.nama', 'barang.id',)
	->get();
        //->orderby('barang.id', 'DESC')
        //->paginate(10);    
	}

    //detai produk start//
    public function detailData($id)
    {
        return DB::table('barang')->join('toko', 'toko.id_member', '=', 'barang.id_member')
            ->join('users', 'users.id', '=', 'barang.id_member')
            ->join('kategori', 'kategori.kategori', '=', 'barang.kategori')
            ->where('barang.id', $id)
            ->select('barang.*', 'users.name', 'users.telp', 'users.hp', 'users.referal', 'toko.id_member', 'toko.nama_toko', 'toko.alamat_toko', 'kategori.nama')
            ->get();
    }
    //detail produk end//


    // destroy data barang di db
    public function destroyData($id)
    {
        DB::table('barang')
            ->where('id', $id)
            ->delete();
    }

    // post ubah data ke db
    public function postData($id, $data)
    {
        DB::table('barang')->where('id', $id)->update($data);
    }



}
