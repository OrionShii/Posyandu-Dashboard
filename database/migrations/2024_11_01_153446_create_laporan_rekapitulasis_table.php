<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kesehatan_balita_laporan_rekapitulasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kader')->constrained('kesehatan_balita_kader', 'id');
            $table->foreignId('id_pengukuran')->constrained('kesehatan_balita_pengukuran', 'id');
            $table->foreignId('id_puskesmas')->constrained('kesehatan_balita_puskesmas', 'id'); // Add this line for puskesmas
            $table->date('tanggal');
            $table->text('isi_laporan');
            $table->string('foto_kegiatan', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesehatan_balita_laporan_rekapitulasi');
    }
};
