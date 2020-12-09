<?php

namespace App\Models;

use App\Models\Operacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'codest',
        'situacion',
        'apellido',
        'nombre',
        'dni',
        'parentesco'
    ];

    public $timestamps = false;

    public function operaciones()
    {
        return $this->hasMany(Operacion::class, 'dni_afiliado', 'dni');
    }
}
