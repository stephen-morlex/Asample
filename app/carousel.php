<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class carousel extends Model
{
    use Resizable;
    protected $guarded = [];
}
