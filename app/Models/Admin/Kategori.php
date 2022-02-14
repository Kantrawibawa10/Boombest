<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

    protected $fillable = [
        'id',
        'kategori',
        'nama',
        'img_kategori',
    ];

}