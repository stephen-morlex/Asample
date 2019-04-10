<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
