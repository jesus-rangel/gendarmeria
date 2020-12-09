<?php

namespace App\Models;

use App\Models\Vademecum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Operacion extends Model
{
    use HasFactory;

    public $timestamp = false;

    protected $guarded = ['id'];

    
    
    public function vademecum()
    {
        return $this->belongsTo(Vademecum::class, 'id_vademecum');
    }
    protected $table = 'operaciones';
}
