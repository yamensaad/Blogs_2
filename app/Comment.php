<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->belongTo('App\post');
    }

    public function user(){
        return $this->belongTo('App\User');
    }
    
}
