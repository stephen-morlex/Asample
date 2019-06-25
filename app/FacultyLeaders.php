<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class FacultyLeaders extends Model
{
    use Resizable;
    protected $guarded = [];
    public function faculty()
    {
      return $this->belongsTo('App\Faculty');
    }
}
