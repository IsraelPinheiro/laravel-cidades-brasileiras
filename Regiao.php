<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model{
    protected $table = 'regioes';
    public $timestamps = false;
    //Relationships
    public function estados(){
        return $this->hasMany('App\Estados');
    }
}
