<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MemberModel extends Model
{
    public function detailData($id)
    {
        return DB::table('users')->where('id', $id)->get();
    }

    public function editUser($id)
    {
        DB::table('users')->where('id', $id)->update();
    }
}
