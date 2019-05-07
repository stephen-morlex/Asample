<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $guarded = [];
    public function studentCat()
    {
        return $this->belongsTo('App\StudentCategory');
    }
}
