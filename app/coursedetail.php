<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coursedetail extends Model
{
    //
    public $timestamps = false;

    protected $table = "coursedetail";

    public function idCourse(){
        return $this -> hasOne('App\course', 'idCourse', 'id');
    }

    public function idTutor(){
        return $this -> hasOne('App\user','idTutor', 'id');
    }

    public function idStudent(){
        return $this -> hasMany('App\user', 'idStudent', 'id');
    }

    public function idSubject(){
        return $this -> hasMany('App\subject', 'idSubject', 'id');
    }
}
