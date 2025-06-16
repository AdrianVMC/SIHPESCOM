<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';
    protected $primaryKey = 'id_grupo';
    public $timestamps = false;

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'id_profesor');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'id_materia');
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class, 'id_grupo');
    }
}
