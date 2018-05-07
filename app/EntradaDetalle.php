<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class EntradaDetalle extends Model
{
    protected $table = 'entrada_detalle';

    public function cilindro()
    {
        return $this->belongsToMany('App\Cilindro' ,'cilindro_id');
    }

    public function entrada()
    {
        return $this->belongsToMany('App\Entrada' ,'entrada_id');
    }

    public function condicion()
    {
        return $this->belongsToMany('App\Condicion' ,'condicion_id');
    }

}
