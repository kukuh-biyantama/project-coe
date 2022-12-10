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
        Schema::create('ks_pestisidas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('id_lokasisawah');
            $table->string('ks_pestisida_nama');
            $table->string('ks_pestisida_tempat_membeli');
            $table->date('ks_pestisida_tgl_semprot');
            $table->float('ks_pestisida_jumlah_takaran');
            $table->string('ks_pestisida_keterangan')->nullable();
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
        Schema::dropIfExists('ks_pestisidas');
    }
};
