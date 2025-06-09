<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cubiculo extends Model
{
    protected $table = 'cubiculo';
    protected $primaryKey = 'id_cubiculo';
    public $timestamps = false;

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'id_profesor');
    }
}
