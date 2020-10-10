<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'email', 
        'dni', 
        'legajo', 
        'usuario', 
        'password'
    ];

    protected $hidden = [
        'password', 
        'remember_token' 
    ];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ];
}
