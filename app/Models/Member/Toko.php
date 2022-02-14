<?php

namespace App\Models\Member;

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

    function img_toko()
    {
        if ($this->img_toko && file_exists(public_path('foto_toko' . $this->img_toko)))
            return asset('foto_toko' . $this->img_toko);
        else
            return asset('foto_toko/toko_kosong.jpg');
    }

    function delete_img_toko()
    {
        if ($this->img_toko && file_exists(public_path('foto_toko' . $this->img_toko)))
            return unlink(public_path('foto_toko' . $this->img_toko));
    }
}
