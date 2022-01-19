<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    public $timestamp = 'false';

    public function prd()
    {
        return $this->hasMany('App\backend\Product', 'category_id', 'id');
    }
}
