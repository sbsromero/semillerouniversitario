<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoSemilla extends Model
{
    protected $table = "fotosSemillas";

    protected $fillable = ['nombre','extension','semilla_id'];

    public function semilla(){
    	return $this->belongsTo('App\Semilla');
    }
}
