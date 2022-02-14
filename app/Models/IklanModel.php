<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IklanModel extends Model
{
  public function allIklan() {
      return DB::table('iklan')->get();
  }
}
