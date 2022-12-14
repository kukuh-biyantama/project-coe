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
            $table->bigInteger('id_user');
            $table->string('id_lokasisawah');
            $table->string('ks_pupuk_jenis');
            $table->string('ks_pupuk_sumber_organik');
            $table->string('ks_pupuk_sumber_anorganik');
            $table->string('ks_pupuk_merk');
            $table->date('ks_pupuk_tgl_rabuk');
            $table->float('ks_pupuk_jumlah_takaran');
            $table->string('ks_pupuk_keterangan')->nullable();
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
