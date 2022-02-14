<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TokoModel extends Model
{
    public function mytoko()
    {
        return DB::table('toko')->get();
    }

    public function detailToko($referal)
    {
        return DB::table('toko')
            ->where('id_member', $referal)
            ->get();
    }
}
