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
        Schema::create('daftarpengepuls', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('id_user');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('noktp')->nullable();
            $table->string('kabupaten');
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
        Schema::dropIfExists('daftarpengepuls');
    }
};
