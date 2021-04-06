@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Danh sách thiết bị hỏng</h4>
                </div>
                <div class="col-sm-4 col-6 text-right m-b-30">
                    <a href="{{ route('getThemThietBiHong') }}" class="btn btn-primary btn-rounded float-right"><i
                            class="fa fa-plus"></i>Thêm thiết bị
                        hỏng</a>
                </div>
            </div>
            @if (session('thongbao'))
                <div class="alert alert-success" role="alert">
                    {{ session('thongbao') }}
                </div>
            @endif

            <form action="/admin/thietbihong/search" method="GET">
                @csrf
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <input class="form-control" style=" border-radius: 10px;" type="text" name="searchThietBiHong"
                            placeholder="Tên thiết bị hoặc Model hoặc Serial hoặc Mã thiết bị">
                    </div>
                    <div class="col-sm-1 col-1 text-right m-b-20">
                        <button class="btn btn-rounded float-right" type="submit"
                            style="color: white; background-color: #009efb"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            @if (session('add'))
                <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('add') }}</strong>
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('delete') }}</strong>
                </div>
            @endif
            @if (session('update'))
                <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('update') }}</strong>
                </div>
            @endif
            @if (session('quyen'))
                <div class="alert alert-danger alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('quyen') }}</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div id="all" class="tabcontent" style="display: block;">
                            <table class="table table-condensed table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên thiết bị</th>
                                        <th>Người dùng</th>
                                        <th>Ngày báo hỏng</th>
                                        <th>Mã thiết bị</th>
                                        <th>Model</th>
                                        <th>Serial</th>
                                        <th>Ghi chú</th>
                                        <th>Trạng thái</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($data))
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->tenThietBi }}</td>
                                                <td>{{ $item->tenNguoiDung }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->maThietBi }}</td>
                                                <td>{{ $item->model }}</td>
                                                <td>{{ $item->serial }}</td>
                                                <td>{{ $item->ghiChu }}</td>
                                                <td>{{ $item->trangThai }}</td>
                                                <td>
                                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                                        href="/admin/thietbihong/delete/{{ $item->id }}"><i
                                                            class="fa fa-trash" style="font-size: 15px;" title="Xóa"
                                                            aria-hidden="true"></i></a>
                                                    <a href="/admin/thietbihong/get-edit/{{ $item->id }}"><i
                                                            class="fa fa-edit" style="font-size: 15px;" title="Chỉnh sửa"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tbody>
                                    @if (isset($searchs))
                                        @foreach ($searchs as $rs)
                                            <tr>
                                                <td>{{ $rs->tenThietBi }}</td>
                                                <td>{{ $rs->tenNguoiDung }}</td>
                                                <td>{{ $rs->created_at }}</td>
                                                <td>{{ $rs->maThietBi }}</td>
                                                <td>{{ $rs->model }}</td>
                                                <td>{{ $rs->serial }}</td>
                                                <td>{{ $rs->ghiChu }}</td>
                                                <td>{{ $rs->trangThai }}</td>
                                                <td>
                                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                                        href="/admin/thietbihong/delete/{{ $rs->id }}"><i
                                                            class="fa fa-trash" style="font-size: 15px;" title="Xóa"
                                                            aria-hidden="true"></i></a>
                                                    <a href="/admin/thietbihong/get-edit/{{ $rs->id }}"><i
                                                            class="fa fa-edit" style="font-size: 15px;" title="Chỉnh sửa"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
