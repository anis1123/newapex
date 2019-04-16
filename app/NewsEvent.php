<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $fillable = ['title','body','slug', 'excerpt','user_id', 'published_at'];
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

    // public function publicationLabel()
    // {
    //     if ( ! $this->published_at) {
    //         return '<span class="label label-warning">Draft</span>';
    //     }
    //     elseif ($this->published_at && $this->published_at->isFuture()) {
    //         return '<span class="label label-info">Schedule</span>';
    //     }
    //     else {
    //         return '<span class="label label-success">Published</span>';
    //     }
    // }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}

