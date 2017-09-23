<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deuda_Estudiante extends Model
{
    protected $table = 'deudas_estudiantes';
    protected $fillable = ['mensualidad','mora','total_pagar','fecha_limite','estudiante_id'];

	public function estudiante()
	{
	    return $this->belongsTo('App\Estudiante');
	}


}

