<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MemberModel extends Model
{
    public function dataUser()
    {
        return DB::table('users')->get();
    }

    public function destroyData($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();
    }

    public function detailData($id)
    {
        return DB::table('users')->where('id', $id)->get();
    }
}
