<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
   
    protected $table = 'university';

    protected $fillable = ['name','image','about','collaboration','address','phone'];
}
