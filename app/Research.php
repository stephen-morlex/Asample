<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Research extends Model
{
    use Resizable;
    protected $guarded = [];
}
