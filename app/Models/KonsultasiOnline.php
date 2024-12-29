<?php

// app/Models/KonsultasiOnline.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KonsultasiOnline extends Model
{
    protected $table = 'kesehatan_balita_konsultasi_online';

    protected $fillable = [
        'id_ortu',
        'id_kader',
        'keluhan',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function orangTua(): BelongsTo
    {
        return $this->belongsTo(OrangTua::class, 'id_ortu');
    }

    public function kader(): BelongsTo
    {
        return $this->belongsTo(Kader::class, 'id_kader');
    }
}
