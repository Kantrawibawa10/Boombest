<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->integer('RegisterNoAktif');
            $table->string('RegPassword', '100');
            $table->string('RegisterReff', '100');
            $table->string('RegisterRoot', '100');
            $table->integer('RootNumber');
            $table->integer('RootFlag');
            $table->integer('IDMember');
            $table->date('TglDaftar');
            $table->date('TglExpired');
            $table->date('HariExpired');
            $table->integer('ExpiredFlag');
            $table->integer('PointReg');
            $table->string('PaidStatus', '100');
            $table->string('VANumber', '100');
            $table->string('VABank', '100');
            $table->date('VAExpired');
            $table->integer('VAAmount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
}
