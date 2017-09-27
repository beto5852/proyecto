<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use Notifiable, Authorizable, CanResetPassword;


    protected $table = 'telefonos';

    protected $fillable = ['telefono'];


    public function users()
    {
        return $this->belongsTo('App\User');
    }
   

}
