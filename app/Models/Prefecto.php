<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Prefecto extends Authenticatable
{

    use Notifiable;
    protected $table = 'prefecto';
    protected $primaryKey = 'no_trabajador';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'correo',
        'contrasena',
    ];

    protected $hidden = [
        'contrasena',
    ];

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = Hash::make($value);
    }

    public function getAuthIdentifierName()
    {
        return 'no_trabajador';
    }
    protected $casts = [
        'fecha_registro' => 'datetime',
    ];
}
