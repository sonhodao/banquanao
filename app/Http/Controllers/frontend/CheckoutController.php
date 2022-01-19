<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\backend\Order;
use App\backend\Product_Order;
use App\backend\Users;
use Cart;
class CheckoutController extends Controller
{
    //
    public function GetCheckout(){
        $data['checkout'] = Cart::content();
        $data['total'] = Cart::total(0,"",".");
        return view('frontend.checkout.checkout',$data);
    }

    public function PostCheckout(Request $request){
        $data = new Order;
        $data -> full = $request -> full;
        $data -> address = $request -> address;
        $data -> email = $request -> email;
        $data -> phone = $request -> phone;
        $data -> total = Cart::total(0,"",".");
        $data -> state = 1;
        $data->save();
        foreach(Cart::content() as $row){
            $prd_order = new Product_Order;
            $prd_order -> code = $row->id;
            $prd_order -> name = $row->name;
            $prd_order -> price = $row->price;
            $prd_order -> quantity = $row->qty; 
            $prd_order -> img = $row->options->img;
            $prd_order -> total = $row->total;
            $prd_order -> order_id = $data->id;
            $prd_order -> save();
        }
        return redirect('checkout/complete/'.$data->id);
    }

    public function GetComplete($id){
        $data['complete']=Order::find($id);
        $data['user'] = Users::where('id',3)->first();
        return view('frontend.checkout.complete',$data);
    }

}
