<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = "iklan";

    protected $fillable = [
        'level',
        'iklanpict',
        'link',
        'description',
        'date_add',
        'date_end',
    ];
}
