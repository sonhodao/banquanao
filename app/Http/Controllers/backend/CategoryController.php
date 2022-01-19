<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\backend\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    //
    public function GetCate(){
        $data['category'] = Category::all();
        return view('backend.category.category',$data);
    }

    public function PostCate(AddCategoryRequest $request){
        //
        $cate = new Category;
        $cate->name = $request->name;
        $cate->slug=Str::slug($request->name);
        $cate->parent = $request->parent;
        $cate->save();
        return back()->with('thongbao','Đã thêm sản phẩm thành công!');
    }

    public function GetEditCate($id_category){
        $data['cate'] = Category::find($id_category);
        $data['category'] = Category::all()->toarray();
        return view("backend.category.editcategory",$data);   
    }

    public function PostEditCate(EditCategoryRequest $request,$id_category){
        $cate = Category::find($id_category);
        $cate->name = $request->name;
        $cate->slug=Str::slug($request->name);
        $cate->parent = $request->parent;
        $cate->save();
        return back()->with('thongbao','Đã sửa sản phẩm thành công!');
    }

    public function GetDeleteCate($id_category){
        Category::destroy($id_category);
        return back()->with('thongbao','Đã xóa thành công!');
    }
}
