<?php

// app/Models/Puskesmas.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Puskesmas extends Model
{
    protected $table = 'kesehatan_balita_puskesmas';

    protected $fillable = [
        'username',
        'no_telp',
        'email',
    ];

    public function laporanRekapitulasi()
    {
        return $this->hasMany(LaporanRekapitulasi::class, 'id_puskesmas', 'id');
    }
}
