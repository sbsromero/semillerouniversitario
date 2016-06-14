<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = "fotos";

    protected $fillable = ['nombre','extension'];

    public function semilla(){
    	return $this->belongsTo('App\Semilla');
    }

    public function mentor(){
    	return $this->belongsTo('App\Mentor');
    }
}
