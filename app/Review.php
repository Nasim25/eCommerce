<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function preview()
    {
        return $this->belongsTo('App\Product','product_id');
    }
}
