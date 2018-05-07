<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Condicion extends Model
{
    protected $table = 'condicion';

    public function entrada_detalle()
    {
        return $this->hasMany('App\EntradaDetalle' ,'entrada_detalle_id');
    }

    public function cilindro()
    {
        return $this->hasMany('App\Cilindro' ,'cilindro_id');
    }

}
