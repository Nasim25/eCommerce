<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category','category_id')->select('id','category_name');
    }
}
