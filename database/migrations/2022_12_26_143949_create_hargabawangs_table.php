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
        Schema::create('hargabawangs', function (Blueprint $table) {
            $table->id();
            $table->string('hb_id');
            $table->string('kab_id');
            $table->date('tgl');
            $table->integer('harga');
            // $table->integer('produksibawang')->nullable();
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
        Schema::dropIfExists('hargabawangs');
    }
};
