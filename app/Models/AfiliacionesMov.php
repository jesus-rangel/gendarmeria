<?php

namespace App\Models;

use App\Models\Operacion;
use App\Models\Vademecum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AfiliacionesMov extends Model
{
    use HasFactory;

    protected 
        $table = 'afiliaciones_mov',
        $primaryKey = 'Id_afilmov';
    
    public $timestamp = false;

    public function operaciones()
    {
        return $this->hasMany(Operacion::class, 'dni_afiliado', 'dni');
    }
}
