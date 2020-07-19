<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function shipping()
    {
       return $this->belongsTo('App\Shipping');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function payment()
    {
        return $this->belongsTo('App\Payment','payment_id');
    }
}
