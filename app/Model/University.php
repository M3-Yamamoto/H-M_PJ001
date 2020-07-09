<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['name','about','major','logo','building_image','campus_image','collaboration','address'];
}
