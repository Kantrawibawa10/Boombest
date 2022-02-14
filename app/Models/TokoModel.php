<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TokoModel extends Model
{
    public function toko()
    {
        return DB::table('toko')->get();
    }


}
