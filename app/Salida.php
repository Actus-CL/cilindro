<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Salida extends Model
{
    protected $table = 'salida';

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

    // public function usuario()
    // {
    //     return $this->belongsToMany('App\Models\Auth\User\User' ,'users_id');
    // }

    public function salida_detalle()
    {
        return $this->hasMany('App\SalidaDetalle' ,'salida_detalle_id');
    }

}
