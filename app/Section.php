<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function program()
    {
        return $this->hasMany('App\Program');
    }

    public function admission()
    {
        return $this->hasMany('App\Admission');
    }
}
