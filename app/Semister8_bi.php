<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semister8_bi extends Model
{
    protected $fillable = ['title','credits', 'user_id'];


    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format. " H:i:s";
        return $this->created_at->format($format);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
