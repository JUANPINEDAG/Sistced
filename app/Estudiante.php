<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = ['foto','nombres','apellidos','cumpleanos','sexo','libro','folio','acta','nacionalidad','grado','direccion','condicion','tanda','telefono','nombre_familiar','periodo_academico_id','aula_id'];



	public function periodo_academico()
	{
	    return $this->belongsTo('App\Periodo_Academico');
	}

	public function aula()
	{
	    return $this->belongsTo('App\Aula');
	}

	public function deudas_estudiantes()
	{
	    return $this->hasMany('App\Deuda_Estudiante');
	}
}

