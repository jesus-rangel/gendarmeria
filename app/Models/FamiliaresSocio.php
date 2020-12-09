<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliaresSocio extends Model
{
    use HasFactory;

    protected 
        $table = 'familiares_socio',
        $primaryKey = 'Id_fliarsocio';
}
