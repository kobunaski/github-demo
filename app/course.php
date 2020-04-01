<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public $timestamps = false;

    protected $table = "course";
    public function messagebox(){
        return $this->hasMany('App\messagebox', 'idCourse','id');
    }
}
