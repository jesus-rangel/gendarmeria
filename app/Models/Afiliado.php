<?php

namespace App\Models;

use App\Models\Operacion;
use App\Models\AfiliacionesMov;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Afiliado extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'A_nombre',
        'A_apellido'
    ];

    protected $primaryKey = 'Id_afiliado';

    public $timestamp = false;
    
    public function operaciones()
    {
        return $this->hasMany(Operacion::class);
    }

    public function scopeDni($query, $value)
    {
        if($value)
        {
            return $query->where('A_dni', 'like', "%{$value}%");
        }
    }

    public function getAfiliados()
    {
        $familiares = 
            FamiliaresSocio::select( 
                DB::raw("
                    Id_fliarsocio as id,
                    Fs_codest as codest,
                    Fs_situacion as situacion,
                    Fs_apellido as apellido,
                    Fs_nombre as nombre,
                    Fs_dni as dni,
                    Fs_parentesco as parentesco"))
                    ->where('Fs_249', '=', 'SI')
                    ->where('Fs_estado', '=', 'A');
        $afiliados = 
            Afiliado::select([
                DB::raw("
                    Id_afiliado as id, 
                    Af_codest as codest,
                    Af_situacion as situacion,
                    A_apellido as apellido,
                    A_nombre as nombre,
                    A_dni as dni,
                    A_diasevacuacion as parentesco")])
            ->join('afiliaciones_mov', function($join)
                    {
                        $join->on('Af_codest', '=', 'A_codest');
                        $join->on('Af_situacion', '=', 'A_situacion');
                    })
            ->where('A_tipoestado', '<>', 'B')
            ->where('Af_concepto', '249')
            ->union($familiares)
            ->groupBy(DB::raw('Id_afiliado, Af_codest, Af_situacion, A_apellido, A_nombre, A_dni, A_diasevacuacion, cast(codest as unsigned)'));
        
        return $afiliados;
    }

}
