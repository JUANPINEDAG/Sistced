<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';
    protected $fillable = ['localizacion', 'capacidad'];

    public function estudiantes()
	{
		return $this->hasMany('App\Estudiante');
	}

}

