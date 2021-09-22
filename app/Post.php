<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Cat(){
        return $this->belongsTo("App\Cat");
    //
}
}