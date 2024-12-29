<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kesehatan_balita_konsultasi_online', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ortu')->constrained('kesehatan_balita_orang_tua', 'id');
            $table->foreignId('id_kader')->constrained('kesehatan_balita_kader', 'id');
            $table->text('keluhan');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesehatan_balita_konsultasi_online');
    }
};
