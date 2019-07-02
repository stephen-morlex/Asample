<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Member extends Model
{
    //
    use Resizable;
    protected $guarded = [];

    public function govenor()
    {
        return $this->belongsToMany('App\Govenor');
    }
}
