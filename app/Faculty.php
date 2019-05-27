<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Faculty extends Model implements Searchable
{
    protected $guarded = [];
    use Resizable;
    public function programs()
    {
        return $this->hasMany('App\Program');
    }
    public function pro()
    {
        return $this->belongsTo('App\Program');
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('faculty.show', $this->slug);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}
