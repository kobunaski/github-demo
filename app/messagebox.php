<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messagebox extends Model
{
    //

    protected $table = 'messageBox';
    public function user(){
        return $this->belongsTo('App\User', 'idUser','id');
    }
}
