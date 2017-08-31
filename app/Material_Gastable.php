<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material_Gastable extends Model
{
    protected $table = 'materiales_gastables';
    protected $fillable = ['nombre','cantidad'];

}
