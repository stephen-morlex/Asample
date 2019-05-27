<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Student extends Model
{
    use Resizable;

    protected $guarded = [];
    public function studentCat()
    {
        return $this->belongsTo('App\StudentCategory');
    }
}
