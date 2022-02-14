<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('alamat');
            $table->string('referal');
            $table->string('image');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('negara');
            $table->string('telp');
            $table->string('hp');
            $table->integer('point_total');
            $table->integer('point_tarik');
            $table->integer('point_sisa');
            $table->string('bank');
            $table->string('no_rek');
            $table->string('no_register');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
