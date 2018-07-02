<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model{
    public $timestamps = false;
    //Relationships
    public function regiao(){
        return $this->belongsTo('App\Regiao');
    }
    public function cidades(){
        return $this->hasMany('App\Cidade');
    }
}
