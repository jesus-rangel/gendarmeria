<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'dni',
        'password',
        'telefono',
        'farmacia_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        if(!empty($password))
        {
            $this->attributes['password'] = Hash::make($password);
        }
    }

    public function scopeName($query, $value)
    {
        if($value)
        {
            return $query->where('name', 'like', "%{$value}%");
        }
    }

    public function scopeDni($query, $value)
    {
        if ($value) 
        {
            return $query->where('dni', 'like', "%{$value}%");
        }
    }

    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
        
    }
}
