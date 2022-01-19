@extends('backend.master.master')
@section('title', 'Thêm sản phẩm')
@section('name')
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <form method="POST" enctype="multipart/form-data">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Thêm sản phẩm</div>
                <div class="panel-body">
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
                                <input type="text" name="code" class="form-control">
                                {!! ShowErrors($errors, 'code') !!}
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control">
                                {!! ShowErrors($errors, 'name') !!}
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm (Giá chung)</label>
                                <input type="number" name="price" class="form-control">
                                {!! ShowErrors($errors, 'price') !!}
                            </div>
                            <div class="form-group">
                                <label>Sản phẩm có nổi bật</label>
                                <select name="featured" class="form-control">
                                    <option value="0">Không</option>
                                    <option value="1">Có</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="state" class="form-control">
                                    <option value="1">Còn hàng</option>
                                    <option value="0">Hết hàng</option>
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
                                <textarea name="info" style="width: 100%;height: 100px;"></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea id="editor" name="describe" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <button class="btn btn-success" name="add-product" type="submit">Thêm sản phẩm</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @csrf
        </div>
        </form>
    </div>

    <!--/.row-->
</div>


@endsection