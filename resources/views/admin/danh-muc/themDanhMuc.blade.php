@extends('adminlte::page')

@section('title', 'Quản lý danh mục')
@section('content_header')
    <div class="row">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Trang chủ</a></li>
                <li class="breadcrumb-item active">Quản lý danh mục</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm danh mục mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" method="post" action="{{ route('danmucRoute.store') }}">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tenDanhMuc">Tên danh mục</label>
                                    <input type="text" name="tendanhmuc" class="form-control" id="tendanhmuc" placeholder="Nhập tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả</label>
                                    <textarea class="form-control" name="mota" rows="3" placeholder="Nhập nội dung"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="trangthai" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/form-validate.js"></script>
@stop
