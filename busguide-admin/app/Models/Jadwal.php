<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'halte_ids',
        'waktu_keberangkatan',
        'waktu_tiba',
        'status',
        'hari_operasi',
        'keterangan',
    ];

    protected $casts = [
        'hari_operasi' => 'array',
        'halte_ids'    => 'array',
    ];
}
