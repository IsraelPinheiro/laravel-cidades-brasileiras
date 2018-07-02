<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model{
    public $timestamps = false;
    //Relationships
    public function estado(){
        return $this->belongsTo('App\Estado');
    }
}
