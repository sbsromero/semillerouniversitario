<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = "mentores";

    protected $fillable = ['nombre','apellidos','tipoDocumento','numeroIdentificacion','edad',
    'fechaNacimiento','email','ciudad','direccion','celular','eps','tipoSangre','area_id'];

    public function area(){
    	return $this->belongsTo('App\Area');
    }

    public function foto(){
    	return $this->hasOne('App\FotoMentor');
    }

    public function grupo(){
    	return $this->hasOne('App\Grupo');
    }
}
