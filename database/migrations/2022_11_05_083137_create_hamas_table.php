<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hamas', function (Blueprint $table) {
            $table->id();
            // $table->string('lokasi_keterangan');
            $table->string('hama_nama');
            $table->dateTime('hama_tgl_terkena');
            $table->string('hama_gambar');
            $table->string('hama_keterangan');
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
        Schema::dropIfExists('hamas');
    }
};
