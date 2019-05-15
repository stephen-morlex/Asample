<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
class News extends Model
{
    use Resizable;
    protected $guarded = [];
    public function newsCategory(){
    	return $this->belongsTo('App\NewsCategory');
    }
}
