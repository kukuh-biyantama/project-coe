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
        Schema::create('panens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_penanaman');
            $table->string('namapetani');
            $table->string('id_lokasisawah');
            $table->date('ks_waktu_tanam');
            $table->date('panen_tanggal');
            $table->float('panen_jumlah');
            $table->string('id_penebas');
            $table->float('panen_harga');
            $table->float('panen_kualitas_a')->nullable();
            $table->float('panen_kualitas_b')->nullable();
            $table->float('panen_kualitas_c')->nullable();
            $table->string('status')->nullable();
            $table->string('statusdaripengepul')->nullable();
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
        Schema::dropIfExists('panens');
    }
};
