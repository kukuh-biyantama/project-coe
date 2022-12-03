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
        Schema::create('kegiatansawahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('lokasisawah_id')->constrained('lokasi_sawahs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ks_metode_pengairan');
            $table->string('ks_sumber_modal');
            $table->float('ks_luas_lahan');
            $table->float('ks_bibit_jumlah');
            $table->date('ks_waktu_tanam');
            $table->string('ks_status_lahan');
            $table->bigInteger('ks_jumlah_modal');
            $table->boolean('ks_panen');
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
        Schema::dropIfExists('kegiatansawahs');
    }
};
