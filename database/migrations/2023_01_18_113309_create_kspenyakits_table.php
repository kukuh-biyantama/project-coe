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
        Schema::create('kspenyakits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kegiatansawah_id');
            $table->foreignId('penyakit_id');
            $table->date('ks_penyakit_tanggal_terkena');
            $table->string('ks_penyakit_keterangan');
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
        Schema::dropIfExists('kspenyakits');
    }
};
