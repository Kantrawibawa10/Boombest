<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IklanModel extends Model
{
    public function allData() {
        return DB::table('iklan')->get();
    }
    public function levelIklan() {
        return DB::table('iklan')->select('level')->limit(1)->get();
    }

    public function addData($data)
    {
        DB::table('iklan')->insert($data);
    }
}
