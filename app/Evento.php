<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $table ='events';

    protected $fillable = ['title','start','end','color'];

}
