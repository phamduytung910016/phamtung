@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 667px;">
        <style type="text/css">
            table {
                width: 100%
            }

            table th {
                text-align: center;
                background-color: #009efb;
                color: white
            }

            table td {
                text-align: center;
            }

            /* Style the tab */
            .tab {
                overflow: hidden;
                /*border: 1px solid #ccc;*/
                background-color: #f1f1f1;
                margin: 0 auto;
            }

            /* Style the buttons inside the tab */
            .tab a {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 13px;
                text-decoration: none;
            }

            /* Change background color of buttons on hover */
            .tab a:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab a.active {
                background-color: #ccc;
                text-decoration: none;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                /*border: 1px solid #ccc;*/
                border-top: none;
            }

            .tablinks {
                width: 14.28571428571%
            }

            .fa-pencil-square-o:hover {
                border-radius: 4px;
                background-color: yellow;
            }

            .fa-medkit:hover {
                border-radius: 4px;
                color: #FA8258;
            }

            .fa-trash:hover {
                border-radius: 4px;
                color: red;
            }

        </style>
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Danh sách thiết bị</h4>
                    Tổng số thiết bị: {{ $count }}
                </div>
                <div class="col-sm-4 col-5 text-right m-b-10">
                </div>
                <div class="col-sm-4 col-4 text-right m-b-10">
                    <a href="" class="btn btn-rounded float-right" style="background-color: #009efb; color: white"><i
                            class="fa fa-plus"></i> Thêm thiết bị mới</a>
                </div>
            </div>
            <!-- tìm kiếm -->
            <form>
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="dv_name" style=" border-radius: 10px;"
                                placeholder="Tên thiết bị...">
                        </div>
                        <div class="col-sm-3 col-3">
                            <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                                name="khoaPhongSuDung" class="form-control">
                                <option value="">Chọn khoa phòng</option>
                                @foreach ($khoaPhong as $item)
                                    <option value="{{ $item->ten }}">{{ $item->ten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3 col-3">
                            <select style=" height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                                name="maLoaiThietBi" class="form-control">
                                <option value="">Loại thiết bị</option>
                                @foreach ($loaiThietBi as $item)
                                    <option value="{{ $item->maLoaiThietBi }}">{{ $item->tenLoaiThietBi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-4 col-4" style="text-align: center;">
                            <button class="btn btn-rounded " style="background-color: #009efb; color: white;float: left;"
                                type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- sidebar -->
            <br>
            <div class="">
                <div class="tab">
                    <a class="tablinks" href="{{ route('list_thiet_bi_all') }}" style="background-color: #ccc;">Tất cả</a>
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
                                        @break
                                        @case(2)
                                            <td>Đang sử dụng
                                            </td>
                                        @break
                                        @case(3)
                                            <td>Đang báo hỏng
                                            </td>
                                        @break
                                        @case(4)
                                            <td>Đang sửa chữa
                                            </td>
                                        @break
                                        @case(5)
                                            <td>Đã ngừng sử dụng
                                            </td>
                                        @break
                                        @case(6)
                                            <td>Đã thanh lý
                                            </td>
                                        @break
                                    @endswitch
                                    <td>{{ $item->khoaPhongSuDung }}</td>
                                    <td>
                                        <a href=""><i class="fa fa-medkit" style="font-size: 15px;"
                                                title="Nhập vật tư kèm theo" aria-hidden="true"></i></a>&nbsp;
                                        <a href=""><i class="fa fa-pencil-square-o" style="font-size: 15px;"
                                                title="Thông tin" aria-hidden="true"></i></a>&nbsp;
                                        <a onclick="return confirm('Bạn có chắc chắn xóa?')" href=""><i class="fa fa-trash"
                                                style="font-size: 15px;" title="Xóa" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach

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
        <script>
            function closeForm() {
                document.getElementById("form_kiemdinh").style.display = "none";
            }
            $(document).on('click', '.kiem_dinh', function() {
                document.getElementById("form_kiemdinh").style.display = "block";
            });

        </script>
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/Chart.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/chart.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </div>
@endsection
