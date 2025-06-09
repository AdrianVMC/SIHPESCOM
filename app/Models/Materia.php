<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';
    protected $primaryKey = 'id_materia';
    public $timestamps = false;

    //Metodo para acceder a los grupos relacionados con materia especifica
    public function grupos(){
        return $this->hasMany(Grupo::class, 'id_materia');
    }

}
