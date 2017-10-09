<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $table = 'cultivos';

    protected $fillable =['nombre_cultivo'];


    public function etapa()
    {
        return $this->belongsToMany('App\Etapa','ce')->withPivot('ce_id_etapa')->withTimestamps();
    }

    public function rubro()
    {
        return $this->belongsTo('App\Rubro');
    }

    public  function variedade()
    {
        return $this->hasMany('App\Variedad');
    }





}
