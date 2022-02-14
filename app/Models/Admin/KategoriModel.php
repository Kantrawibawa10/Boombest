<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriModel extends Model
{
    public function allKategori() {
        return DB::table('kategori')->get();
    }

    public function  addKategori($data) {
        DB::table('kategori')->insert($data);
    }
}
