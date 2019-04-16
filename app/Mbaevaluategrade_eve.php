<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mbaevaluategrade_eve extends Model
{
    protected $fillable = ['grade','cgpa','description','user_id'];
    

    

    public function dateFormatted($showTimes = false)
    {
        $format= "d/m/Y";
        if ($showTimes) $format = $format. " H:i:s";
        return $this->created_at->format($format);
    }


    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
