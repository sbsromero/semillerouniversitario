<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
    protected $table= "acudientes";

    protected $fillable  = ['nombre','parentesco','direccion',
    'telefono','whatsapp','semilla_id'];

    public function semilla(){
	return $this->belongsTo('App\Semilla');
    }
}
