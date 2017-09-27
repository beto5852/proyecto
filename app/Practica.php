<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    //
    use SluggableTrait;

    protected  $sluggable =[

        'build_from' => 'name_practica',
        'save_to'   => 'slug',

    ];


    protected $table = 'practicas';

    protected $fillable = ['name_practica','contenido','path','practica_id_tecnologia','practica_id_usuario'];

    public function semanas()
    {
        return $this->belongsToMany('App\Semana')->withTimestamps();
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
