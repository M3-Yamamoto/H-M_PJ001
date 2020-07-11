<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\user\Post','Post_catagory');
    }
}
