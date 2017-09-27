<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    use Notifiable, Authorizable, CanResetPassword;


    protected $table = 'semanas';

    protected $fillable = ['nombre_semana'];


    public function mes()
    {
        return $this->belongsToMany('App\Mes')->withTimestamps();
    }
    public  function practicas()
    {
        return $this->belongsToMany('App\Practica')->withTimestamps();
    }

}
