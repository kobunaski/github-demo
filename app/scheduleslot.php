<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scheduleslot extends Model
{
    //
    public $timestamps = false;
    //
    protected $table = 'scheduleslot';
    public function schedule(){
        return $this->hasOne('App\schedule', 'idSchedule','id');
    }
    public function slot(){
        return $this->hasOne('App\slot', 'idSlot','id');
    }
}
