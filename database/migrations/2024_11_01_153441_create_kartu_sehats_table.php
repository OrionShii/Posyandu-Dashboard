<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kesehatan_balita_kartu_sehat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ortu')->constrained('kesehatan_balita_orang_tua', 'id');
            $table->date('masa_berlaku');
            $table->enum('status_kartu', ['aktif', 'tidak aktif']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesehatan_balita_kartu_sehat');
    }
};
