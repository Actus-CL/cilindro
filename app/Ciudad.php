<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Ciudad extends Model
{
    protected $table = 'ciudad';

    public function cliente()
    {
        return $this->hasMany('App\Cliente' ,'cliente_id');
    }


}
