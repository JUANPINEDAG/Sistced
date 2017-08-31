<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo_Academico extends Model
{
    protected $table = 'periodos_academicos';
    protected $fillable = ['fecha_inicio','fecha_fin'];

}

public function estudiantes()
{
    return $this->hasMany('App\Estudiante');
}