<?php

// app/Models/Balita.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Balita extends Model
{
    protected $table = 'kesehatan_balita_balita';

    protected $fillable = [
        'nama',
        'nik_balita',
        'usia_balita',
        'tgl_lahir_balita',
        'id_ortu',
    ];

    protected $casts = [
        'tgl_lahir_balita' => 'date',
    ];

    public function orangTua(): BelongsTo
    {
        return $this->belongsTo(OrangTua::class, 'id_ortu');
    }

    public function pengukuran(): HasMany
    {
        return $this->hasMany(Pengukuran::class, 'id_balita');
    }

    public function grafik(): HasMany
    {
        return $this->hasMany(Grafik::class, 'id_balita');
    }
    public function growthRecords()
    {
        return $this->hasMany(GrowthRecord::class);
    }
}
