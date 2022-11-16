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
            $table->string('lokasi_keterangan');
            $table->float('panen_hasil_produksi');
            $table->float('panen_kualitas_a');
            $table->float('panen_kualitas_b');
            $table->float('panen_kualitas_c');
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
