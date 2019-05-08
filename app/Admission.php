<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Admission extends Model
{
    protected $guarded = [];
    use Resizable;
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
