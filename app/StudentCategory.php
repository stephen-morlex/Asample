<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCategory extends Model
{
    protected $guarded = [];
    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
