<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Farmacia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'farmacias';


    protected $fillable = [
        'name',
        'provincia',
        'localidad',
        'domicilio',
        'telefono',
        'notas'
    ];

    public function scopeName($query, $value)
    {
        if ($value)
        {
            return $query->where('name', 'like', "%$value%");
        }
    }

    public function scopeDomicilio($query, $value)
    {
        if ($value)
        {
            return $query->where('domicilio', 'like', "%$value%");
        }
    }

    public function scopeProvincia($query, $value)
    {
        if ($value)
        {
            return $query->where('provincia', 'like', "%$value%");
        }
    }
}
