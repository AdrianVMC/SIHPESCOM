<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia'; // ← nombre correcto
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'id_materia');
    }
}
