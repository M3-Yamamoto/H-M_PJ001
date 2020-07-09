<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Model\user\Tag', 'Post_tags');
    }
    public function catagories()
    {
        return $this->belongsToMany('App\Model\user\Catagory', 'Post_catagories');
    }
}
