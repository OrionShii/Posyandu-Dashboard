<?php

// app/Models/Kader.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kader extends Model
{
    protected $table = 'kesehatan_balita_kader';

    protected $fillable = [
        'username',
        'no_telp',
        'email',
    ];

    public function konsultasiOnline(): HasMany
    {
        return $this->hasMany(KonsultasiOnline::class, 'id_kader');
    }

    public function laporanRekap(): HasMany
    {
        return $this->hasMany(LaporanRekapitulasi::class, 'id_kader');
    }
}
