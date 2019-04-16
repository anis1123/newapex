<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodayNews extends Model
{
    protected $fillable = ['title','body','user_id', 'published_at'];
    protected $dates = ['published_at'];

    

    public function dateFormatted($showTimes = false)
    {
        $format= "d/m/Y";
        if ($showTimes) $format = $format. " H:i:s";
        return $this->created_at->format($format);
    }

    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value ?: NULL;
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
