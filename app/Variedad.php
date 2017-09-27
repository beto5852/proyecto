<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variedad extends Model
{
    protected $table = 'variedades';

    protected $fillable =['nombre_variedad'];



    public  function caracteristicas()
    {
       // return $this->belongsToMany('App\Caracteristica','cv','cv_id_caracteristica','cv_id_variedad')->withTimestamps();

        return $this->belongsToMany('App\Caracteristica')->withTimestamps();
    }
    public function cultivos()
    {
        return $this->belongsTo('App\Cultivo');
    }

    
}
