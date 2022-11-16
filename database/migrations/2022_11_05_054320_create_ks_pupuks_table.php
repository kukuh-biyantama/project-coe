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
        Schema::create('ks_pupuks', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_keterangan');
            $table->string('ks_pupuk_nama');
            $table->string('ks_pupuk_jenis');
            $table->date('ks_pupuk_tgl_rabuk');
            $table->float('ks_pupuk_jumlah_takaran');
            $table->string('ks_pupuk_keterangan');
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
        Schema::dropIfExists('ks_pupuks');
    }
};
