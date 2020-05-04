@extends('adminlte::page')

@section('title', 'Quản lý danh mục')
@section('content_header')
    <div class="row">
        <div class="col-sm-6">
            <h4>Quản lý danh mục</h4>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{  route('danmucRoute.create') }}" type="button" class="btn btn-success">Thêm danh mục mới </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả </th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th style="width: 40px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($danhMucs as $danhMuc)
                        <tr>
                            <td>{{ $danhMuc->id  }}</td>
                            <td>{{ $danhMuc->tendanhmuc  }}</td>
                            <td>{{ $danhMuc->mota  }}</td>
                            <td>
                                @if($danhMuc->trangthai == 1)
                                    <label type="button" class="btn btn-success btn-sm">Hiện</label>
                                @elseif($danhMuc->trangthai == 0)
                                    <label type="button" class="btn btn-warning btn-sm">Ẩn</label>
                                @else
                                    <label type="button" class="btn btn-danger btn-sm">Không xác định</label>
                                @endif
                            </td>
                            <td>{{ $danhMuc->created_at  }}</td>
                            <td>
                                <a href="{{  route('danmucRoute.edit', [$danhMuc->id]) }}" type="button" class="btn bg-gradient-info btn-sm">Sửa</a>
                                <a href="{{  route('danmucRoute.destroy', [$danhMuc->id]) }}" type="button" class="btn bg-gradient-danger  btn-sm">Xóa</a>
                            </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
