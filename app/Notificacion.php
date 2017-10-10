<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Notificacion extends Model
{
    //
    protected $table = 'notificaciones';

    protected  $guarded = ['id'];
    
   // protected $fillable = ['Mensaje','id_usuario_envia','id_usuario_recibe'];

   /* public function users()
    {
        return $this->belongsTo('App\User','id_usuario_envia');
    }*/
}
