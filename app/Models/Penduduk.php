<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = "penduduk";
    
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'alamat'];
}
