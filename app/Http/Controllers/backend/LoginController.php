<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\backend\Users;
use Illuminate\Support\Facades\Auth;
use Carbon\carbon;
use App\backend\Order;

class LoginController extends Controller
{

    public function GetLogin(){
        return view('backend.login.login');
    }

    public function PostLogin(LoginRequest $request){
        if(Users::where('email',$request->email && 'password',$request->password)){
            session()->put('email',$request->email);
        }
        return redirect('admin');
    }

    public function GetLogout(){
        session()->forget('email');
        return redirect('/');
    }

    public function GetIndex(){
        $month_now = carbon::now()->format('m');
        $year_now = carbon::now()->format('Y');
        for($i = 1;$i <= $month_now; $i++){
           $dl['Tháng'.$i] = Order::where('state',1)->whereMonth('updated_at',$i)->whereYear('updated_at',$year_now)->sum('total');
        }
        $data['dl'] = $dl;
        return view('backend.login.index',$data);
    }
}
