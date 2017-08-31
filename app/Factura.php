<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['descripcion','costo_unitario','cantidades','tipo_pago','gasto_total','fecha_pago','user_id'];

}
