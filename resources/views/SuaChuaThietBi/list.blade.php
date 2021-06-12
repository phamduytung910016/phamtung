@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Danh sách thiết bị đang sửa chữa</h4>
                </div>
            </div>
            @if (session('thongbao'))
                <div class="alert alert-success" role="alert">
                    {{ session('thongbao') }}
                </div>
            @endif
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
                                        <th>Mã thiết bị</th>
                                        <th>Ngày sửa chữa</th>
                                        <th>Ngày sửa xong</th>
                                        <th>Nghiệm thu</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($data))
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->ThietBiSuaChua->tenThietBi }}</td>
                                                <td>{{ $item->ThietBiSuaChua->maThietBi }}</td>
                                                <td>{{ $item->ngaySuaChua }}</td>
                                                <td>{{ $item->ngaySuaXong }}</td>
                                                <td>{{ $item->NghiemThu->trangThai }}</td>
                                                <td>
                                                    @if ($item->nghiemThu == 4 || $item->nghiemThu == 5)
                                                    <a class="ban_giao" data-deviceid="18"
                                                    href="/admin/suachua/getBanGiao/{{ $item->id }}"><i
                                                        class="fa fa-arrow-circle-o-up"
                                                        style="font-size: 15px;cursor: pointer;" title="Bàn giao"
                                                        aria-hidden="true" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal{{ $item->id }}"></i></a>
                                                    @endif
                                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                                        href="/admin/suachua/delete/{{ $item->id }}"><i
                                                        class="fa fa-trash" style="font-size: 15px;" title="Xóa"
                                                        aria-hidden="true"></i></a>
                                                    <a href="/admin/suachua/getEdit/{{ $item->id }}"><i
                                                        class="fa fa-edit" style="font-size: 15px;" title="Tạo lịch sửa chữa"
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
