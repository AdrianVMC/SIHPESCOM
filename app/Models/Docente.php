<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docente';
    protected $primaryKey = 'id_docente';
    public $timestamps = false;

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'id_profesor');
    }

    public function cubiculo()
    {
    return $this->hasMany(Cubiculo::class, 'id_profesor');
    }
}
