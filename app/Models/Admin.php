<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Users as Authenticatable;

class Admin extends Model
{
    use HasFactory, Notifiable;

    protected $table = "admin";
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'username', 'email', 'password'
    ];
}
