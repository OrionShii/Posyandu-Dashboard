<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanRekapitulasi extends Model
{
    protected $table = 'kesehatan_balita_laporan_rekapitulasi';
    protected $fillable = [
        'id_kader',
        'id_pengukuran',
        'id_puskesmas',
        'tanggal',
        'isi_laporan',
        'foto_kegiatan',
    ];

    public function kader()
    {
        return $this->belongsTo(Kader::class, 'id_kader', 'id');
    }

    public function pengukuran()
    {
        return $this->belongsTo(Pengukuran::class, 'id_pengukuran', 'id');
    }

    public function puskesmas()
    {
        return $this->belongsTo(Puskesmas::class, 'id_puskesmas', 'id'); // Define this relationship
    }
}
