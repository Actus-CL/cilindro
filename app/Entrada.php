<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Entrada extends Model
{
    protected $table = 'entrada';

    public function sucursal()
    {
        return $this->belongsToMany('App\Sucursal' ,'sucursal_id');
    }

    public function tipo_gas()
    {
        return $this->belongsToMany('App\TipoGas' ,'tipo_gas_id');
    }

    public function responsable()
    {
        return $this->belongsToMany('App\Responsable' ,'responsable_id');
    }

    public function entrada_detalle()
    {
        return $this->hasMany('App\EntradaDetalle' ,'entrada_detalle_id');
    }

}
