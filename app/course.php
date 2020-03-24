<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public $timestamps = false;

    protected $table = "course";

    public function idStaff(){
        return $this -> belongsTo('App\staff','idStaff', 'id');
    }

    public function idStudent(){
        return $this -> hasMany('App\student', 'idStudent', 'id');
    }

    public function idSubject(){
        return $this -> hasMany('App\subject', 'idSubject', 'id');
    }
}
