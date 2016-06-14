<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = "areas";

    protected $fillable = ['nombre','disponibilidad'];

    public function semillas(){
    	return $this->hasMany('App\semilla');
    }

    public function grupos(){
    	return $this->hasMany('App\Grupo');
    }

    public function mentor(){
    	return $this->hasOne('App\Mentor');
    }
}
