<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Priest extends Model
{
    use Resizable;
	//
    protected $guarded = [];
}
