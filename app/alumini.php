<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumini extends Model
{
    protected $fillable= ['name','email','program','year','occupation','sector','phone'];
}
