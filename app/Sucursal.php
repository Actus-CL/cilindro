<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sucursal extends Model
{
    protected $table = 'sucursal';

    public function cliente()
    {
        return $this->belongsToMany('App\Cliente' ,'cliente_id');
    }

    public function entrada()
    {
        return $this->hasMany('App\Entrada' ,'entrada_id');
    }

}
