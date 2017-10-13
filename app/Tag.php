<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public $table = 'tags';

    protected $fillable = ['nombre_tags'];

    public function practicas()
    {
        return $this->belongsToMany('App\Practica','pt')->withPivot('tags_id_practicas')->withTimestamps();
    }

}
