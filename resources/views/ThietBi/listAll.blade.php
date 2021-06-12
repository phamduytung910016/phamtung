@extends('layout.master')
<link rel="stylesheet" href="{{ asset('assets/css/list.css') }}">
@section('content')

    <div class="page-wrapper" style="min-height: 667px;">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Danh sách thiết bị</h4>
                    Tổng số thiết bị: {{ $count }}
                </div>
                <div class="col-sm-4 col-5 text-right m-b-10">
                </div>
                <div class="col-sm-4 col-4 text-right m-b-10">
                    <a href="{{ route('get_them_thiet_bi') }}" class="btn btn-rounded float-right"
                        style="background-color: #009efb; color: white"><i class="fa fa-plus"></i> Thêm thiết bị mới</a>
                </div>
            </div>
            <!-- tìm kiếm -->
            <form action="/admin/thietbi/searchAll" method="GET">
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="dataSearch" style=" border-radius: 10px;"
                                placeholder="Tên thiết bị|model|serial">
                        </div>
                        <div class="col-sm-3 col-3">
                            <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                                name="khoaPhongSuDung" class="form-control">
                                <option value="">Chọn khoa phòng</option>
                                @foreach ($khoaPhong as $item)
                                    <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-4 col-4" style="text-align: center;">
                            <button class="btn btn-rounded " style="background-color: #009efb; color: white;float: left;"
                                type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                        </div>

                    </div>
                </div>
            </form>
            <br>
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
            <div class="">
                <div class="tab">
                    <a class="tablinks" href="{{ route('list_thiet_bi_all') }}" style="background-color: #ccc;">Tất
                        cả</a>
                    <a class="tablinks" href="{{ route('list_thiet_bi_chua_ban_gia') }}">Chưa bàn giao</a>
                    <a class="tablinks" href="{{ route('list_thiet_bi_dang_su_dung') }}">Đang sử dụng</a>
                    <a class="tablinks" href="{{ route('list_thiet_bi_bao_hong') }}">Đang báo hỏng</a>
                    <a class="tablinks" href="{{ route('list_thiet_bi_dang_sua_chua') }}">Đang sửa chữa</a>
                    <a class="tablinks" href="{{ route('list_thiet_bi_ngung_su_dung') }}">Đã ngưng sử dụng</a>
                    <a class="tablinks" href="{{ route('list_thiet_bi_thanh_ly') }}">Đã thanh lý</a>
                </div>
                <br>
                <div id="all" class="tabcontent" style="display: block;">
                    <table class="table table-condensed table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Mã thiết bị</th>
                                <th>Tên thiết bị</th>
                                <th>Model</th>
                                <th>Serial</th>
                                <th>Tình trạng</th>
                                <th>Khoa phòng sử dụng</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($listAll))
                                @foreach ($listAll as $item)
                                    <tr>
                                        <td>{{ $item->maThietBi }}</td>
                                        <td>{{ $item->tenThietBi }}</td>
                                        <td>{{ $item->model }}</td>
                                        <td>{{ $item->serial }}</td>
                                        @switch($item->tinhTrang)
                                            @case(1)
                                                <td>Chưa bàn giao
                                                </td>
                                                <td></td>
                                            @break
                                            @case(2)
                                                <td>Đang sử dụng
                                                </td>
                                                <td>{{ $item->KhoaPhongSuDung->ten }}</td>
                                            @break
                                            @case(3)
                                                <td>Đang báo hỏng
                                                </td>
                                                <td></td>
                                            @break
                                            @case(4)
                                                <td>Đang sửa chữa
                                                </td>
                                                <td></td>
                                            @break
                                            @case(5)
                                                <td>Đã ngừng sử dụng
                                                </td>
                                                <td></td>
                                            @break
                                            @case(6)
                                                <td>Đã thanh lý
                                                </td>
                                                <td></td>
                                            @break
                                        @endswitch

                                        <td>
                                            @if ($item->tinhTrang == 1)
                                                <a class="ban_giao" data-deviceid="18"
                                                    href="/admin/thietbi/getBanGiao/{{ $item->id }}"><i
                                                        class="fa fa-arrow-circle-o-up"
                                                        style="font-size: 15px;cursor: pointer;" title="Bàn giao"
                                                        aria-hidden="true" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal{{ $item->id }}"></i></a>
                                            @elseif ($item->tinhTrang == 2)
                                            <a href="/admin/baohong/getAdd/{{ $item->id }}"><i
                                                class="fa fa-medkit" style="font-size: 15px;"
                                                title="Tạo lịch sửa chữa" aria-hidden="true"></i></a>
                                            @endif
                                            <a href="/admin/thietbi/hoSo/{{$item->id}}"><i class="fa fa-eye" style="font-size: 15px;"
                                                    title="Xem hồ sơ thiết bị" aria-hidden="true"></i></a>&nbsp;
                                            <a href="/admin/thietbi/get-edit/{{ $item->id }}"><i
                                                    class="fa fa-pencil-square-o" style="font-size: 15px;"
                                                    title="Chỉnh sửa thông tin" aria-hidden="true"></i></a>&nbsp;
                                            <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                                href="/admin/thietbi/delete/{{ $item->id }}"><i class="fa fa-trash"
                                                    style="font-size: 15px;" title="Xóa" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif (isset($rs))
                                @foreach ($rs as $item)
                                    <tr>
                                        <td>{{ $item->maThietBi }}</td>
                                        <td>{{ $item->tenThietBi }}</td>
                                        <td>{{ $item->model }}</td>
                                        <td>{{ $item->serial }}</td>
                                        @switch($item->tinhTrang)
                                            @case(1)
                                                <td>Chưa bàn giao
                                                </td>
                                                <td></td>
                                            @break
                                            @case(2)
                                                <td>Đang sử dụng
                                                </td>
                                                <td>{{ $item->KhoaPhongSuDung->ten }}</td>
                                            @break
                                            @case(3)
                                                <td>Đang báo hỏng
                                                </td>
                                                <td></td>
                                            @break
                                            @case(4)
                                                <td>Đang sửa chữa
                                                </td>
                                                <td></td>
                                            @break
                                            @case(5)
                                                <td>Đã ngừng sử dụng
                                                </td>
                                                <td></td>
                                            @break
                                            @case(6)
                                                <td>Đã thanh lý
                                                </td>
                                                <td></td>
                                            @break
                                        @endswitch
                                        <td>
                                            @if ($item->tinhTrang == 1)
                                                <a class="ban_giao" data-deviceid="18"
                                                    href="/admin/thietbi/getBanGiao/{{ $item->id }}"><i
                                                        class="fa fa-arrow-circle-o-up"
                                                        style="font-size: 15px;cursor: pointer;" title="Bàn giao"
                                                        aria-hidden="true" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal{{ $item->id }}"></i></a>
                                            @elseif ($item->tinhTrang == 2)
                                            <a href="/admin/baohong/getAdd/{{ $item->id }}"><i
                                                class="fa fa-medkit" style="font-size: 15px;"
                                                title="Tạo lịch sửa chữa" aria-hidden="true"></i></a>
                                            @endif
                                            <a href="/admin/thietbi/hoSo/{{$item->id}}"><i class="fa fa-eye" style="font-size: 15px;"
                                                title="Xem hồ sơ thiết bị" aria-hidden="true"></i></a>&nbsp;
                                            <a href="/admin/thietbi/get-edit/{{ $item->id }}"><i
                                                    class="fa fa-pencil-square-o" style="font-size: 15px;"
                                                    title="Chỉnh sửa thông tin" aria-hidden="true"></i></a>&nbsp;
                                            <a onclick="return confirm('Bạn có chắc chắn xóa?')"
                                                href="/admin/thietbi/delete/{{ $item->id }}"><i class="fa fa-trash"
                                                    style="font-size: 15px;" title="Xóa" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{-- <div class="page-nav text-right">
                        <nav aria-label="Page navigation">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link"
                                            href="http://ubhn.qltbyt.com/ktv/device/list/all?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="http://ubhn.qltbyt.com/ktv/device/list/all?page=3">3</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="http://ubhn.qltbyt.com/ktv/device/list/all?page=4">4</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="http://ubhn.qltbyt.com/ktv/device/list/all?page=2"
                                            rel="next" aria-label="Next »">›</a>
                                    </li>
                                </ul>
                            </nav>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <script>
            function closeForm() {
                document.getElementById("form_kiemdinh").style.display = "none";
            }
            $(document).on('click', '.kiem_dinh', function() {
                document.getElementById("form_kiemdinh").style.display = "block";
            });

        </script> --}}

    </div>
@endsection
