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
        Schema::create('tambahbelis', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('namapetani');
            $table->string('lokasi');
            $table->string('kabupaten');
            $table->string('tafsiranpanen');
            $table->string('kualitasA')->nullable();
            $table->string('kualitasB')->nullable();
            $table->string('kualitasC')->nullable();
            $table->string('jumlahhasil')->nullable();
            $table->string('statusverifikasi')->nullable();
            $table->date('tanggal');
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
        Schema::dropIfExists('tambahbelis');
    }
};
