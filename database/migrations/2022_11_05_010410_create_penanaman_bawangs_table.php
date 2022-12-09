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
        Schema::create('penanaman_bawangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('ks_metode_pengairan');
            $table->string('ks_modal');
            $table->float('ks_luas_lahan');
            $table->float('ks_bibit');
            $table->date('ks_waktu_tanam');
            $table->string('ks_status_lahan');
            $table->bigInteger('ks_jumlah_modal');
            $table->integer('ks_panen')->nullable();
            $table->string('kabupaten');
            $table->string('id_lokasisawah');
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
        Schema::dropIfExists('penanaman_bawangs');
    }
};
