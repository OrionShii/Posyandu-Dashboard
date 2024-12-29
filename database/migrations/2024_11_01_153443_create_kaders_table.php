<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kesehatan_balita_kader', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('no_telp', 15);
            $table->string('email', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesehatan_balita_kader');
    }
};
