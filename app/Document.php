<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class Document extends Model
{
    //
    protected $guarded = [];
    use Resizable;
}
