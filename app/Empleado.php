<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['foto','nombres','apellidos','email','cumpleanos','sexo','identificacion','telefono','estado_civil','nombre_materia','user_id'];
}
