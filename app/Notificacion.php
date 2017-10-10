<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    //
    protected $table = 'notificaciones';

   protected  $guarded = ['id'];
    
    protected $fillable = ['Mensaje','status','id_usuario_envia','id_usuario_recibe'];

    /*public function catidad(){
        return 10;
    }

    public static function findeOrCreateBySessionID($notificaciones_id){
        if($notificaciones_id)
            //busca el mensaje con este id

            return Notificacion::findBySession($notificaciones_id);
        else
            //crea una notificacion
        return Notificacion::creatWithoutSession();

    }

    public static function findBySession($notificaciones_id){


        return Notificacion::find($notificaciones_id);
    }

    public static function creatWithoutSession(){


        $notificacion = new Notificacion;

        $notificacion->status = "vacio";
        //dd($notificacion);
        $notificacion->save();
        return $notificacion;

        /*return Notificacion::create([
            'status'  => 'enable',
        ]);

    };

    */





    /* public function users()
     {
         return $this->belongsTo('App\User','id_usuario_envia');
     }*/
}
