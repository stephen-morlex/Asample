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

    // faculty to dean

    public function dean()
    {
        return $this->hasOne('App\Dean');
    }
    // Faculty to Leadership
    public function leaders()
    {
      return $this->hasOne('App\FacultyLeaders');
    }
    // Search
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
