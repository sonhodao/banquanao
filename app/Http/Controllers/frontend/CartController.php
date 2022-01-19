<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\backend\Product;
use Cart;

class CartController extends Controller
{
    //
    public function GetCart(){
        $data['cart']=Cart::content();
        $data['total']=Cart::total(0, "",",");
        return view('frontend.cart.cart',$data);
    }

    public function AddCart(request $r){
        $prd = Product::find($r->id_product);
        Cart::add([
        'id' => $prd->code,
        'name' => $prd->name,
        'qty' => $r->quantity,
        'weight'=>0,
        'price' => $prd->price,
        'options' => ['img' => $prd->img]]);
        return redirect('cart'); 
    }

    public function UpdateCart($row_Id,$qty){
        Cart::update($row_Id, $qty);
        return "success";
    }

    public function DeleteCart($row_Id){
        Cart::remove($row_Id);
        return back();
    }
}
