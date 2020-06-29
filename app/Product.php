<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subcategories()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function section()
    {
        return $this->belongsTo('App\Section','section_id')->select('id','name');
    }
}
