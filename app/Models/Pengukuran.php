<?php

// app/Models/Pengukuran.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany; // Correct import for HasMany

class Pengukuran extends Model
{
    protected $table = 'kesehatan_balita_pengukuran';

    protected $fillable = [
        'id_balita',
        'tinggi_badan',
        'berat_badan',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'tinggi_badan' => 'decimal:2',
        'berat_badan' => 'decimal:2',
    ];

    public function balita(): BelongsTo
    {
        return $this->belongsTo(Balita::class, 'id_balita');
    }

    public function laporanRekapitulasi()
    {
        return $this->hasMany(LaporanRekapitulasi::class, 'id_pengukuran');
    }
}
