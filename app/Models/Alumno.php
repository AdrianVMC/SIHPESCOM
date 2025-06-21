<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Alumno extends Authenticatable
{
    use Notifiable;
    protected $table = 'alumno';
    protected $primaryKey = 'boleta';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'boleta',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'contrasena',
        'correo',
        'fecha_registro',
    ];

    protected $hidden = [
        'contrasena',
    ];
    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    public function getAuthIdentifierName()
    {
        return 'boleta';
    }
}
