<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Governor extends Model
{
    //
    use Resizable;
    protected $guarded = [];
    public function members()
    {
        return $this->belongsToMany('App\Member');
    }
}
