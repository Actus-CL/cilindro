<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cliente extends Model
{
    protected $table = 'cliente';

    public function ciudad()
    {
        return $this->belongsToMany('App\Ciudad' ,'ciudad_id');
    }

    public function responsable()
    {
        return $this->hasMany('App\Responsable' ,'responsable_id');
    }

    public function cilindro()
    {
        return $this->hasMany('App\Cilindro' ,'cilindro_id');
    }

}
