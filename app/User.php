<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function actividades_usuarios()
    {
        return $this->hasMany('App\Actividad_Usuario');
    }

    public function facturas()
    {
        return $this->hasMany('App\Factura');
    }

    public function empleado()
    {
        return $this->hasOne('App\Empleado');
    }
}
