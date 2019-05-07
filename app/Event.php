<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Event extends Model
{
    protected $guarded = [];
    use Resizable;
}
