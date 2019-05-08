<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Faculty extends Model
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
}
