<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\backend\{Product,Category};

class ProductController extends Controller
{
    //
    public function ListProduct(){
        $data['show_prd'] = Product::paginate(5);
        return view('backend.product.listproduct',$data);
    }

    public function AddProduct(){
        $data['categories'] = Category::all();
        return view('backend.product.addproduct',$data);
    }

    public function PostAddProduct(AddProductRequest $request){
        $data = new Product;
        $data -> code = $request -> code ;
        $data -> name = $request -> name ;
        $data -> slug = str_slug($request -> name) ;
        $data -> price = $request -> price ;
        $data -> featured = $request -> featured ;
        $data -> state = $request -> state ;
        $data -> info= $request -> info ;
        $data -> describe = $request -> describe ;
        if ($request->hasFile('img')) {
            $file = $request->img;
            $file_name = str_slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$file_name);
            $data->img=$file_name;
        }
        else{
            $request->img('no_img.jpg');
        }
        $data -> category_id = $request->category;
        $data -> save();
        return redirect('/admin/product/')->with('themsp','Thêm sản phẩm thành công');
    }

    public function EditProduct($id){
        $data['categories'] = Category::all();
        $data['edit_prd'] = Product::find($id);
        return view('backend.product.editproduct',$data);
    }

    public function PostEditProduct(EditProductRequest $request,$id){
        return view('backend.product.editproduct');
        $add_prd = Product::find($id);
        $data = new Product;
        $data -> code = $request -> code ;
        $data -> name = $request -> name ;
        $data -> slug = str_slug($request -> name) ;
        $data -> price = $request -> price ;
        $data -> featured = $request -> featured ;
        $data -> state = $request -> state ;
        $data -> info= $request -> info ;
        $data -> describe = $request -> describe ;
        if ($request->hasFile('img')) {
            if ($data->img!='no-img.jpg') {
                unlink('backend/img/'.$data->img);
            }
            $file = $request->img;
            $file_name = str_slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$file_name);
            $data->img=$file_name;
        }
        else{
            $request->img('no_img.jpg');
        }
        $data -> category_id = $request->category;
        $data -> save();
        return redirect('/admin/product/')->with('suasp','Sửa sản phẩm thành công');
    }

    public function DeleteProduct($id){
        Product::Destroy($id);
    }
}