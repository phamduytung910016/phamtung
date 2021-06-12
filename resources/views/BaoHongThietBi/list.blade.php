@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Danh sách thiết bị hỏng</h4>
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
                                        <th>Ngày báo hỏng</th>
                                        <th>Lý do</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($data))
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->ThietBiHong->tenThietBi }}</td>
                                                <td>{{ $item->ThietBiHong->maThietBi }}</td>
                                                <td>{{ $item->ngayBaoHong }}</td>
                                                <td>{{ $item->lyDo }}</td>
                                                <td>
                                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                                        href="/admin/baohong/delete/{{ $item->id }}"><i
                                                        class="fa fa-trash" style="font-size: 15px;" title="Xóa"
                                                        aria-hidden="true"></i></a>
                                                    <a href="/admin/suachua/getAdd/{{ $item->id }}"><i
                                                        class="fa fa-edit" style="font-size: 15px;" title="Tạo lịch sửa chữa"
                                                        aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif (isset($rs))
                                        @foreach ($data as $item)
                                        <tr>
                                                <td>{{ $item->ThietBiHong->tenThietBi }}</td>
                                                <td>{{ $item->ThietBiHong->maThietBi }}</td>
                                                <td>{{ $item->ngayBaoHong }}</td>
                                                <td>{{ $item->lyDo }}</td>
                                                <td>
                                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                                        href="/admin/baohong/delete/{{ $item->id }}"><i
                                                        class="fa fa-trash" style="font-size: 15px;" title="Xóa"
                                                        aria-hidden="true"></i></a>
                                                    <a href="/admin/suachua/getAdd/{{ $item->id }}"><i
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
