<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kesehatan_balita_pengukuran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_balita')->constrained('kesehatan_balita_balita', 'id');
            $table->decimal('tinggi_badan', 5, 2);
            $table->decimal('berat_badan', 5, 2);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesehatan_balita_pengukuran');
    }
};
