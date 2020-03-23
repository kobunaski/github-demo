<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    //
    public $timestamps = false;

    protected $table = "subject";

    public function blogging() {
        return $this -> hasMany('app/blogging', 'idBlogging', 'id');
    }

    public function upload() {
        return $this -> hasMany('app/upload', 'idUpload', 'id');
    }
}
