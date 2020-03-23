<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //
    public $timestamps = false;

    protected $table = "staff";

    public function idRole(){
        return $this -> belongsTo('App\role','idRole', 'id');
    }

    public function idSchedule(){
        return $this -> belongsTo('App\schedule', 'idSchedule', 'id');
    }
}
