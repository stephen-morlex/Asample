<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Program extends Model implements Searchable
{
    protected $guarded = [];
    use Resizable;
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('program.show', $this->slug);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}
