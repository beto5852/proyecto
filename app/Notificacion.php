<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    //
    protected $table = 'notificaciones';
    
    protected $fillable = ['Mensaje'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
