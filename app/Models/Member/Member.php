<?php

namespace App\Models\Member;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Member extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = "users";

    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'referal',
        'image_profile',
        'nik',
        'jenis_kelamin',
        'kota',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'negara',
        'telp',
        'hp',
        'point_total',
        'point_tarik',
        'point_sisa',
        'bank',
        'no_rek',
        'no_register',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
