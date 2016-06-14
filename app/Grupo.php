<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "grupos";

    protected $fillable = ['nombre','jornada','mentor_id','area_id'];

    public function semillas(){
    	return $this->hasMany('App\Semilla');
    }

    public function area(){
    	return $this->belongsTo('App\Area');
    }

    public function mentor(){
    	return $this->belongsTo('App\Mentor');
    }
}
