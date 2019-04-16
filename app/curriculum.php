<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curriculum extends Model
{
    protected $fillable = ['body', 'user_id', 'image'];


    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format. " H:i:s";
        return $this->created_at->format($format);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if(! is_null($this->image))
        {
            $directory = config('cms.image.directory');
            $imagePath = public_path() . "/images/" . $this->image;
            if(file_exists($imagePath)) $imageUrl = assets("{$directory}/" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";

        if(! is_null($this->image))
        {
            $directory = config('cms.image.directory');
            $ext = substr(strrchr($this->image, '.'), 1);
            $thumbnail =str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if(file_exists($imagePath)) $imageUrl = assets("{$directory}/" . $thumbnail);
        }

        return $imageUrl;
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
