<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Practica extends Model
{
    //
    protected $table = 'practicas';

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nombre_practica'
            ]
        ];
    }



    protected $fillable = ['nombre_practica','contenido','practica_id_usuario','practica_id_tecnologia','path'];
    //protected $fillable = ['nombre_practica','contenido','path','tags','slug'];





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
