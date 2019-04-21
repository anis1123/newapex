<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $fillable = ['name','user_id','qualification','post','image','bio'];
}
