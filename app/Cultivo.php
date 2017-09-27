<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $table = 'cultivos';

    protected $fillable =['nombre_cultivo'];


    public function etapas()
    {
        return $this->belongsToMany('App\Etapa')->withTimestamps();
    }

    public function rubros()
    {
        return $this->belongsTo('App\Rubro');
    }

    public  function variedades()
    {
        return $this->hasMany('App\Variedad');
    }





}
