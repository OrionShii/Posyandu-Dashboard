<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kesehatan_balita_balita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ortu')->constrained('kesehatan_balita_orang_tua', 'id')->onDelete('cascade');
            $table->string('nama', 50);
            $table->string('nik_balita', 16);
            $table->integer('usia_balita');
            $table->date('tgl_lahir_balita');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesehatan_balita_balita');
    }
};
