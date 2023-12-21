<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    public function up()
    {
        Schema::create('riwayat_tim_pemain', function (Blueprint $table) {
            $table->id('ID_Riwayat_Tim_Pemain');
            $table->unsignedBigInteger('ID_Pemain');
            $table->unsignedBigInteger('ID_Tim');
            $table->integer('Tahun_Mulai')->nullable();
            $table->integer('Tahun_Akhir')->nullable();
            $table->foreign('ID_Pemain')->references('ID_Pemain')->on('pemain');
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat_tim_pemain');
    }
}
;
