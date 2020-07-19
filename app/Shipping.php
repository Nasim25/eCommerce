<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public function order()
    {
        $this->belongsTo('App\Order','shipping_id');
    }
}
