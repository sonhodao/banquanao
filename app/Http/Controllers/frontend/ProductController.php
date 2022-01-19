<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\backend\Product;
use App\backend\Category;

class ProductController extends Controller
{
    //
    public function GetShop(){
        $data['product'] = Product::paginate(6);
        $data['categories'] = Category::all();
        return view('frontend.product.shop',$data);
    }

    public function GetDetail($slug){
        $data['product'] = Product::where('slug',$slug)->first();
        $data['product_m'] = Product::orderBy('id', 'desc')->take(8)->get();
        return view('frontend.product.detail',$data);
    }

}
