<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    //
    use Sluggable;


    protected $table = 'practicas';

    protected $fillable = ['nombre_practica','contenido','path','tags','practica_id_tecnologia','practica_id_usuario'];
    //protected $fillable = ['nombre_practica','contenido','path','tags','slug'];


  public function sluggable()
     {
         return [
             'slug' => [
                 'source' => 'nombre_practica'
             ]
         ];
     }


    public function semanas()
    {
        return $this->belongsToMany('\App\Semana')->withPivot('ps_id_semana')->withTimestamps();
    }
     public function tecnologias()
    {
        return $this->belongsTo('App\Tecnologia');
    }
    public function users()
    {
        return $this->belongsTo('App\User');

    }



}
