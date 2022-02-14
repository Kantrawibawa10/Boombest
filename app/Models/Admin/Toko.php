<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = "toko";

    protected $fillable = [
        'id_member',
        'img_toko',
        'nama_toko',
        'alamat_toko',
        'deskripsi',
    ];
}
