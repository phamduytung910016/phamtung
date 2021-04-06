@extends('layout.master')
@section('content')

    <div class="page-wrapper" style="min-height: 667px;">
        <style type="text/css">
            table th {
                text-align: center;
            }

        </style>
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Đơn vị bảo trì</h4>

                </div>

                <div class="col-sm-4 col-5 text-right m-b-10">
                </div>
                <div class="col-sm-4 col-4 text-right m-b-10">
                    <a href="{{ route('get_them_nha_cung_cap') }}" class="btn btn-rounded float-right"
                        style="background-color: #009efb; color: white"><i class="fa fa-plus"></i> Thêm Đơn vị bảo trì</a>
                </div>
            </div>
            <form action="{{ route('search_nha_cung_cap') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-sm-4 col-4">
                        <input class="form-control" name="dataSearch" style=" border-radius: 10px;"
                            placeholder="Tên đơn vị bảo trì | Người đại diện | Số điện thoại ">
                    </div>
                    <div class="col-sm-4 col-4">
                        <button type="submit" class="btn btn-rounded " style="background-color: #009efb; color: white"><i
                                class="fa fa-search"> &nbsp;</i>Tìm kiếm</button>&nbsp;
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
        </div>
        <div class="content">
            <table class="table table-condensed table-bordered table-hover text-center">
                <thead style="background-color: #009efb; color: white;">
                    <tr>

                        <th>Nhà cung cấp </th>
                        <th>Địa chỉ</th>
                        <th>Đại diện</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th width="5%"></th>

                    </tr>
                </thead>
                <tbody>
                    @if (isset($data))
                        @foreach ($data as $item)
                            <tr>

                                <td>{{ $item->tenNhaCungCap }}</td>
                                <td>{{ $item->diaChi }}</td>
                                <td>{{ $item->nguoiDaiDien }}</td>
                                <td>{{ $item->soDienThoai }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="/admin/nhacungcap/get-edit/{{ $item->id }}"><i
                                            class="fa fa-pencil-square-o " style="font-size: 15px;" title="Chỉnh sửa"
                                            aria-hidden="true"></i></a>&nbsp;
                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                        href="/admin/nhacungcap/delete/{{ $item->id }}"><i class="fa fa-trash"
                                            style="font-size: 15px;" title="Xóa" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tbody>
                    @if (isset($search))
                        @foreach ($search as $result)
                            <tr>

                                <td>{{ $result->tenNhaCungCap }}</td>
                                <td>{{ $result->diaChi }}</td>
                                <td>{{ $result->nguoiDaiDien }}</td>
                                <td>{{ $result->soDienThoai }}</td>
                                <td>{{ $result->email }}</td>
                                <td>
                                    <a href="/admin/nhacungcap/get-edit/{{ $result->id }}"><i
                                            class="fa fa-pencil-square-o " style="font-size: 15px;" title="Chỉnh sửa"
                                            aria-hidden="true"></i></a>&nbsp;
                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                        href="/admin/nhacungcap/delete/{{ $result->id }}"><i class="fa fa-trash"
                                            style="font-size: 15px;" title="Xóa" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
