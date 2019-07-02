<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class Videogallery extends Model
{
    //
    protected $guarded = [];

    public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->video_url)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 400]);
        return $embed->getHtml();
    }
}
