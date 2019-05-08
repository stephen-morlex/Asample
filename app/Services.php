<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Services extends Model
{
    use Resizable;
    protected $guarded = [];
}
