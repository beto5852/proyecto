<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';

    protected $fillable =['nombre_caracteristica','descripcion_caracteristica'];


    public  function variedades()
    {
       // return $this->belongsToMany('App\Variedad','cv','cv_id_caracteristica','cv_id_variedad')->withTimestamps();

        return $this->belongsToMany('App\Variedad')->withTimestamps();
    }


}
