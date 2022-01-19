@extends('backend.master.master')
@section('title', 'Sửa sản phẩm')
@section('name')
 <!--main-->
 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <form method="post">
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="category" class="form-control">
                                    {{GetCategory($categories,0,"",0)}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã sản phẩm</label>
                                <input  type="text" name="code" class="form-control" value="{{$edit_prd->code}}">
                                {!! ShowErrors($errors, 'code') !!}
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input  type="text" name="name" class="form-control" value="{{$edit_prd->name}}">
                                {!! ShowErrors($errors, 'name') !!}
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm (Giá chung)</label>
                                <input  type="number" name="price" class="form-control" value="{{$edit_prd->price}}">
                                {!! ShowErrors($errors, 'price') !!}
                            </div>
                            <div class="form-group">
                                <label>Sản phẩm có nổi bật</label>
                                <select  name="featured" class="form-control">                                  
                                    <option @if($edit_prd->featured == 0) @endif selected value="0">Không</option>
                                    <option @if($edit_prd->featured == 1) @endif selected value="1">Có</option>                                                         
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select  name="state" class="form-control">       
                                    <option @if($edit_prd->state == 1) @endif selected value="1">Hết hàng</option> 
                                    <option @if($edit_prd->state == 0) @endif selected value="0">Còn hàng</option> 
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" name="img">
                                {!! ShowErrors($errors, 'img') !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Thông tin</label>
                                <textarea  name="info" style="width: 100%;height: 100px;">{{$edit_prd->info}}</textarea>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea id="editor"  name="describe" style="width: 100%;height: 100px;">{{$edit_prd->describe}}</textarea>
                                </div>
                                <button class="btn btn-success" name="add-product" type="submit">Sửa sản phẩm</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>

    <!--/.row-->
</div>

@endsection
