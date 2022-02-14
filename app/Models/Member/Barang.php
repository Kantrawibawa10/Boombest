<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";

    protected $fillable = [
        'id_member',
        'img_barang',
        'nama_barang',
        'harga',
        'kondisi',
        'berat',
        'kategori',
        'daerah',
        'spesifikasi',
        'keunggulan',
        'garansi',
        'lainnya',
    ];
}
