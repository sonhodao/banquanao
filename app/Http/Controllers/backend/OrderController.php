<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\backend\Order;


class OrderController extends Controller
{
    //
    public function DetailOrder($id){

        $data['detail']=Order::find($id);
        return view('backend.order.detailorder',$data);
    }

    public function GetOrder(){
        $data['order'] = Order::where('state',2)->get();
        return view('backend.order.order',$data);
    }

    public function PaidOrder($id){

        $data=Order::find($id);
        $data->state = 1;
        $data->save();
        return redirect('/admin/order');
    }

    public function Processed(){
        $data['processed'] = Order::where('state',1)->get();
        return view('backend.order.processed',$data);
    }
}
