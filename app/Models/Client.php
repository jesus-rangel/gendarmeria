<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'A_nombre',
        'A_apellido'
    ];
    
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('quantity', 'purchase_date', 'user_id');
    }

    public function scopeDni($query, $value)
    {
        if($value)
        {
            return $query->where('A_dni', 'like', "%{$value}%");
        }
    }
}
