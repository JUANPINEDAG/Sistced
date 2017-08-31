<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = ['foto','nombres','apellidos','email','cumpleanos','sexo','libro','folio','acta','nacionalidad','grado','direccion','condicion','tanda','telefono','nombre_familiar','periodo_academico_id','aula_id'];

}
