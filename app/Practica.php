<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Practica extends Model
{
    //
    protected $table = 'practicas';

    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'nombre_practica'
            ]
        ];
    }

    public function setPathAttribute($path){

        if (!empty($path)){
            $nombre = $path->image->getClientOriginalName();
            $this->attributes['path'] = $nombre;
            \Storage::disk('local')->put($nombre, \File::get($path));
        }

    }


    protected $fillable = ['nombre_practica','contenido','practica_id_usuario','practica_id_tecnologia','path'];
    //protected $fillable = ['nombre_practica','contenido','path','tags','slug'];





    public function semana()
    {
        return $this->belongsToMany('\App\Semana')->withPivot('ps_id_semana')->withTimestamps();
    }
     public function tecnologia()
    {
        return $this->belongsTo('App\Tecnologia','practica_id_tecnologia');
    }
    public function user()
    {
        return $this->belongsTo('App\User','practica_id_usuario');

    }



}
