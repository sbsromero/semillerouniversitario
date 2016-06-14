<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semilla extends Model
{
    protected $table = "semillas";

    protected $fillable = ['nombre','apellidos','tipoDocumento','numeroIdentificacion',
    'fechaNacimiento','direccion','ciudad','email','facebook','emailFb',
    'telefonoFijo','celular','whatsapp','gradoEscolar','areaInteres',
    'horario','enfermedades','eps','tipoSangre','enterado','comentario','grupo_id',
    'area_id'];

    public function acudientes(){
    	return $this->hasMany('App\Acudiente');
    }

    public function area(){
    	return $this->belongsTo('App\Area');
    }

    public function fotoSemilla(){
    	return $this->hasOne('App\FotoSemilla');
    }

    public function grupo(){
    	return $this->belongsTo('App\Grupo');
    }
}
