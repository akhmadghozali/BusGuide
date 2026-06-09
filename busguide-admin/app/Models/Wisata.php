<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';

    protected $fillable = [
        'nama_wisata',
        'deskripsi',
        'lokasi',
        'gambar',
        'id_halte',
    ];

    public function halte()
    {
        return $this->belongsTo(Halte::class, 'id_halte', 'id_halte');
    }
}