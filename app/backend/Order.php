<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    public function product_order()
    {
        return $this->hasMany('App\backend\Product_Order', 'order_id', 'id');
    }
}
