<?php

// app/Models/OrangTua.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrangTua extends Model
{
    protected $table = 'kesehatan_balita_orang_tua';

    protected $fillable = [
        'username',
        'no_telp',
        'email',
        'nik_ortu',
    ];

    public function kartuSehat(): HasOne
    {
        return $this->hasOne(KartuSehat::class, 'id_ortu');
    }

    public function balita(): HasMany
    {
        return $this->hasMany(Balita::class, 'id_ortu');
    }

    public function konsultasiOnline(): HasMany
    {
        return $this->hasMany(KonsultasiOnline::class, 'id_ortu');
    }
}
