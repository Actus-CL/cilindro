<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Responsable extends Model
{
    protected $table = 'responsable';

    public function cliente()
    {
        return $this->belongsToMany('App\Cliente' ,'cliente _id');
    }

    public function entrada()
    {
        return $this->hasMany('App\Entrada' ,'entrada_id');
    }

}
