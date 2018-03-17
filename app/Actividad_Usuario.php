<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad_Usuario extends Model
{
    protected $table = 'actividades_usuarios';
    protected $fillable = ['descripcion','fecha_hora,user_id'];

    public function user()
	{
	    return $this->belongsTo('App\User');
	}
}

