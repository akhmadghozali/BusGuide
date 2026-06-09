<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Halte extends Model
{
    protected $table = 'halte';
    protected $primaryKey = 'id_halte';

    protected $fillable = [
        'nama_halte',
        'latitude',
        'longitude',
        'alamat',
        'deskripsi',
        'fasilitas',
        'radius_deteksi',
    ];
}