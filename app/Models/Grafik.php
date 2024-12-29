<?php

// app/Models/Grafik.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grafik extends Model
{
    protected $table = 'kesehatan_balita_grafik';

    protected $fillable = [
        'id_balita',
        'id_pengukuran',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function balita(): BelongsTo
    {
        return $this->belongsTo(Balita::class, 'id_balita');
    }

    public function pengukuran(): BelongsTo
    {
        return $this->belongsTo(Pengukuran::class, 'id_pengukuran');
    }
}
