<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\backend\Users;

class UserController extends Controller
{
    //
    public function AddUser(){
        return view('backend.user.adduser');
    }

    public function PostAddUser(AddUserRequest $request){
        $user = new Users;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> full = $request -> full;
        $user -> address = $request -> address;
        $user -> phone = $request -> phone;
        $user -> level = $request -> level;
        $user ->save();
        return redirect('admin/user')->with('thongbao','Đã thêm user thành công!');
    }

    public function EditUser($id){
        $data['user'] = Users::find($id);
        return view('backend.user.edituser',$data);
    }

    public function PostEditUser(EditUserRequest $request,$id){
        $user = Users::find($id);
        $user -> email = bcrypt($request -> email);
        $user -> password = $request -> password;
        $user -> full = $request -> full;
        $user -> address = $request -> address;
        $user -> phone = $request -> phone;
        $user -> level = $request -> level;
        $user ->save();
        return redirect('admin/user')->with('thongbao','Đã sửa user thành công!');
    }

    public function DeleteUser($id){
        $data['user']=Users::Destroy($id);
        return redirect('admin/user')->with('thongbao1','Đã xóa thành công user!');
    }

    public function ListUser(){
        $data['user'] = Users::paginate(4);
        return view('backend.user.listuser',$data);
    }
}
