<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
         return $this->hasMany('App\Subcategory','category_id')->where('subcategory_status',1);
    }
    public function section()
    {
        return $this->belongsTo('App\Section','section_id')->select('id','name');
    }
    
    public function slider()
    {
        return $this->belongsTo('App\Slider','category_id')->select('id','category_name');
    }
    public function products()
    {
        return $this->hasMany('App\Product','category_id')->orderBy('id','DESC');
    }
}
