<?php

namespace App;



use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;
use Fenos\Notifynder\Traits\NotifableLaravel53 as NotifableTrait; // for Laravel 5.3+
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Authorizable, CanResetPassword, NotifableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = 'users';
    
    protected $fillable = ['name', 'email', 'sexo', 'password','type'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   /* public function notificaciones(){
        return $this->hasMany('App\Notificacion');
    }*/
    
    public function practicas(){
        return $this->hasMany('App\Practica');
    }
    
    public function telefonos(){
        return $this->hasMany('App\Telefono');
    }
    
    public function scopeSearch($query,$name){
        return $query->where('name','LIKE',"%$name%" );
    }

}
