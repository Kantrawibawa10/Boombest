<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('referal', 50);
            $table->string('img_barang', 100);
            $table->string('nama_barang', 100);
            $table->string('harga', 100);
            $table->string('kondisi', 50);
            $table->string('berat', 20);
            $table->string('kategori', 50);
            $table->string('daerah', 50);
            $table->longText('spesifikasi', 500);
            $table->longText('keunggulan', 500);
            $table->longText('garansi', 500);
            $table->longText('lainnya', 500);
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
        Schema::dropIfExists('barang');
    }
}
