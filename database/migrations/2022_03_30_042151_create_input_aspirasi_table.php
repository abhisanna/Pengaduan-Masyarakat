<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_aspirasi', function (Blueprint $table) {
            $table->id('id_pelaporan');
            $table->bigInteger('nik')->unsigned();
            $table->foreign('nik')->references('nik')->on('penduduk');
            $table->bigInteger('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->string('lokasi', 50);
            $table->string('ket', 50);
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
        Schema::dropIfExists('input_aspirasi');
    }
}
