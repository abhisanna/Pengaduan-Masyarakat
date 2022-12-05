<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $table = "aspirasi";
    
    protected $primaryKey = 'id_aspirasi';
    
    protected $fillable = [
        'id_pelaporan', 'status', 'nik', 'feedback'
    ];

    public function InputAspirasi() {
        return $this->belongsTo(InputAspirasi::class, 'id_pelaporan', 'id_pelaporan');
    }
}
