<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoMentor extends Model
{
    protected $table = "fotosMentores";

    protected $fillable = ['nombre','extension','mentor_id'];

    public function mentor(){
    	return $this->belongsTo('App\Mentor');
    }
}
