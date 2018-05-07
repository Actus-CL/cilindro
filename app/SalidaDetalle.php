<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SalidaDetalle extends Model
{
    protected $table = 'salida_detalle';

    public function cilindro()
    {
        return $this->belongsToMany('App\Cilindro' ,'cilindro_id');
    }

    public function salida()
    {
        return $this->belongsToMany('App\Salida' ,'salida_id');
    }


}
