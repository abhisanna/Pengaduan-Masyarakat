<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    protected $table = "input_aspirasi";
    
    protected $primaryKey = 'id_pelaporan';
    
    protected $fillable = [
        'nik', 'id_kategori', 'lokasi', 'ket'
    ];

    public function Penduduk() {
        return $this->hasOne(Penduduk::class, 'nik', 'nik');
    }

    public function Kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
