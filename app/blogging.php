<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogging extends Model
{
    //
    public $timestamps = false;
    //
    protected $table = 'blogging';

    public function idSubject() {
        return $this -> hasOne('App\subject', 'idSubject', 'id');
    }
}
