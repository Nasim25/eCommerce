<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category','id')->select('id','category_name');
    }

    public function products()
    {
        return $this->hasMany('App\Product','category_id');
    }
}
