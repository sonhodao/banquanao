<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    public function category()
    {
        return $this->belongsTo('App\backend\Category', 'category_id', 'id');
    }
}
