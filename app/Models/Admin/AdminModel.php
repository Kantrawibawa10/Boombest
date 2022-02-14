<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function dataAdmin() {
        return DB::table('users')->get();
    }

    public function detailDataAdmin($id) {
        return DB::table('users')->where('id', $id)->get();
    }

    public function destroyData($id) {
        return DB::table('users')->where('id', $id)->delete();
    }
}
