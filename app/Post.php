<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;


class Post extends Model
{
    protected $table = 'post';
    
    public function getMdBodyHtmlAttributes($value){
        return $this->body?Markdown::convertToHtml(e($this->body)):NULL;
    }
}
