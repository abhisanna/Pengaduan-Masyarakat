<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id('id_aspirasi');
            $table->enum('status', ['menunggu', 'proses', 'selesai'])->default("menunggu");
            $table->bigInteger('nik')->unsigned();
            $table->bigInteger('id_pelaporan')->unsigned();
            $table->foreign('id_pelaporan')->references('id_pelaporan')->on('input_aspirasi');
            $table->string('feedback', '255')->default("Menunggu Respon");
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
        Schema::dropIfExists('aspirasi');
    }
}
