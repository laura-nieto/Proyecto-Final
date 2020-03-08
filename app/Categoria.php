<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table='categoria';
    public $timestamps = false;

    public function preguntas(){
        return $this->hasMany('App\Quiz','categoria_id');
    }

    public function getRouteKeyName(){
        return 'nombre';
    }
}
