<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Program extends Model
{
    protected $guarded = [];
    use Resizable;
    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
