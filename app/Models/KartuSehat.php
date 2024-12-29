<?php

// app/Models/KartuSehat.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KartuSehat extends Model
{
    protected $table = 'kesehatan_balita_kartu_sehat';

    protected $fillable = [
        'id_ortu',
        'masa_berlaku',
        'status_kartu',
    ];

    protected $casts = [
        'masa_berlaku' => 'date',
        'status_kartu' => 'string',
    ];

    public function orangTua(): BelongsTo
    {
        return $this->belongsTo(OrangTua::class, 'id_ortu');
    }
}
