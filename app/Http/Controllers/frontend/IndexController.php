<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\backend\{Product,Category};

class IndexController extends Controller
{
    //
    public function GetIndex(){
        $data['product_nb'] = Product::where('featured',1)->take(4)->get();
        $data['product_m'] = Product::orderBy('id', 'desc')->take(8)->get();
        return view('frontend.index',$data);
    }

    public function GetPrdCate($slug){
        $data['product'] = Category::where('slug',$slug)->first()->prd()->paginate(6);
        $data['categories'] = Category::all();
        return view('frontend.product.shop',$data);
    }
 
    public function Getfilter(Request $request){
        $data['categories'] = Category::all();
        $data['product'] = Product::whereBetween('price', [$request->start, $request->end])->paginate(6);
        return view('frontend.product.shop',$data);
    }

    public function GetAbout(){
        return view('frontend.about');
    }

    public function GetContact(){
        return view('frontend.contact');
    }

}
