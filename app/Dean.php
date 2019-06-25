<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Dean extends Model
{
    use Resizable;
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
}
