<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Section extends Model
{
    use Resizable;
    public function program()
    {
        return $this->hasMany('App\Program');
    }

    public function admission()
    {
        return $this->hasMany('App\Admission');
    }
}
