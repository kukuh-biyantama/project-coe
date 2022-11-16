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
        Schema::create('lokasi_sawahs', function (Blueprint $table) {
            $table->id('lokasi_id');
            $table->float('lokasi_latitude');
            $table->float('lokasi_longitude');
            $table->string('kabupaten');
            $table->string('lokasi_keterangan');
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
        Schema::dropIfExists('lokasi_sawahs');
    }
};
