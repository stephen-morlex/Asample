<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function studentCat()
    {
        return $this->belongsTo('App\StudentCategory');
    }
}
