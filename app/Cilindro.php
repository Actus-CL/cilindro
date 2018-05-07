<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cilindro extends Model
{
    protected $table = 'cilindro';

    public function estado()
    {
        return $this->belongsToMany('App\Estado' ,'estado_id');
    }

    public function ubicacion()
    {
        return $this->belongsToMany('App\Ubicacion' ,'ubicacion_id');
    }

    public function estado_proceso()
    {
        return $this->belongsToMany('App\EstadoProceso' ,'estado_proceso_id');
    }

    public function condicion()
    {
        return $this->belongsToMany('App\Condicion' ,'condicion_id');
    }

    public function medida()
    {
        return $this->belongsToMany('App\Medida' ,'medida_id');
    }

    public function cliente()
    {
        return $this->belongsToMany('App\Cliente' ,'cliente_id');
    }

    public function marca()
    {
        return $this->belongsToMany('App\Marca' ,'marca_id');
    }

    public function tipo_gas()
    {
        return $this->belongsToMany('App\TipoGas' ,'tipo_gas_id');
    }

    public function entrada_detalle()
    {
        return $this->hasMany('App\EntradaDetalle' ,'entrada_detalle_id');
    }

}
