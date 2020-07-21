<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function section()
    {
        return $this->belongsTo('App\Section','section_id')->select('id','name');
    }
    public function productImages()
    {
        return $this->hasMany('App\ProductImage');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand','brand_id');
    }
}
