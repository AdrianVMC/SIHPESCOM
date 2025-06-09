<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Alumno extends Authenticatable
{
    use Notifiable;

    // Nombre de la tabla personalizada
    protected $table = 'alumno';

    // Clave primaria
    protected $primaryKey = 'boleta';
    protected $keyType = 'int';
    public $incrementing = true;

    // Sin timestamps (created_at, updated_at)
    public $timestamps = false;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'boleta',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'contrasena',
        'correo',
        'fecha_registro',
    ];

    // Campos ocultos (por seguridad)
    protected $hidden = [
        'contrasena',
    ];

    /**
     * Laravel usará este campo para comparar contraseñas al hacer login.
     */
    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    /**
     * Laravel usará este campo como identificador (username) en Auth::attempt().
     */
    public function getAuthIdentifierName()
    {
        return 'boleta';
    }
}
