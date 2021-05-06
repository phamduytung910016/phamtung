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
                    Tổng số thiết bị: 59
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
                <div class="content">
                    <div class="row">
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="dv_name" style=" border-radius: 10px;"
                                placeholder="Tên thiết bị...">
                        </div>
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="model" style=" border-radius: 10px;" placeholder="Model...">
                        </div>
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="serial" style=" border-radius: 10px;" placeholder="Serial...">
                        </div>
                        <div class="col-sm-3 col-3">
                            <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                                name="khoaPhongSuDung_id" class="form-control">
                                <option value="">Chọn khoa phòng</option>
                                <option value="1">Phòng Vật tư - Thiết bị y tế</option>
                                <option value="2">Khoa GMHS</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="dv_id" style=" border-radius: 10px;"
                                placeholder="Mã thiết bị">
                        </div>
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="import_id" style=" border-radius: 10px;"
                                placeholder="Dự án, gói thầu">
                        </div>
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="manufacturer" style=" border-radius: 10px;"
                                placeholder="Hãng sản xuất">
                        </div>
                        <div class="col-sm-3 col-3">
                            <select style=" height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                                name="maLoaiThietBi" class="form-control">
                                <option value="">Loại thiết bị</option>
                                <option value="CDHAtest">Thiết bị chẩn đoán hình ảnh test</option>
                                <option value="CPN01">Thiết bị chưa phân nhóm 01</option>
                                <option value="CPN02">Thiết bị chưa phân nhóm 02</option>
                                <option value="CPN03">Thiết bị chưa phân nhóm 03</option>
                                <option value="CPN05">Thiết bị chưa phân nhóm 05</option>
                                <option value="CPN04">Thiết bị chưa phân nhóm 04</option>
                                <option value="CPN06">Thiết bị chưa phân nhóm 06</option>
                                <option value="A01">Thiết bị loại A01</option>
                                <option value="A02">Thiết bị loại A02</option>
                                <option value="B02">Thiết bị loại B02</option>
                                <option value="B01">Thiết bị loại B01</option>
                                <option value="C01">Thiết bị loại C01</option>
                                <option value="C02">Thiết bị loại C02</option>
                                <option value="D01">Thiết bị loại D01</option>
                                <option value="D02">Thiết bị loại D02</option>
                                <option value="B03">Thiết bị loại B03</option>
                                <option value="B04">Thiết bị loại B04</option>
                                <option value="MRI">Hệ thống MRI</option>
                                <option value="CT">Hệ thống CT</option>
                                <option value="thiết bị A 03">A03</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3 col-3" style="text-align: center;">
                            <a href="" style="float: left;" class="btn btn-success btn-rounded"><i
                                    class="fa fa-file-excel-o"></i> Import</a>
                        </div>
                        <div class="col-sm-4 col-4" style="text-align: center;">
                            <button class="btn btn-rounded " style="background-color: #009efb; color: white;float: left;"><i
                                    class="fa fa-search"></i> Tìm kiếm</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- sidebar -->
            <br>
            <div class="">
                <div class="tab">
                    <a class="tablinks" href="" style="background-color: #ccc;">Tất cả</a>
                    <a class="tablinks" href="">Chưa bàn giao</a>
                    <a class="tablinks" href="">Đang sử dụng</a>
                    <a class="tablinks" href="">Đang báo hỏng</a>
                    <a class="tablinks" href="">Đang sửa chữa</a>
                    <a class="tablinks" href="">Đã ngưng sử dụng</a>
                    <a class="tablinks" href="">Đã thanh lý</a>
                </div>
                <br>
                <div id="all" class="tabcontent" style="display: block;">
                    <table class="table table-condensed table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã thiết bị</th>
                                <th>Tên thiết bị</th>
                                <th>Model</th>
                                <th>Serial</th>
                                <th>Tình trạng</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>Hệ thống Máy chụp cộng hưởng từ (MRI) 1,5 Telsa</td>
                                <td>Signa HDxt</td>
                                <td>R8481</td>
                                <td>
                                    Mới </td>
                                <td>
                                    <a href=""><i class="fa fa-medkit" style="font-size: 15px;" title="Nhập vật tư kèm theo"
                                            aria-hidden="true"></i></a>&nbsp;
                                    <a href=""><i class="fa fa-pencil-square-o" style="font-size: 15px;" title="Thông tin"
                                            aria-hidden="true"></i></a>&nbsp;
                                    <a onclick="return confirm('Thêm vào danh sách kiểm kê?')" href=""><i class="fa fa-book"
                                            style="font-size: 15px;" title="Thêm vào danh sách kiểm kê"
                                            aria-hidden="true"></i></a>
                                    <a onclick="return confirm('Bạn có chắc chắn xóa?')" href=""><i class="fa fa-trash"
                                            style="font-size: 15px;" title="Xóa" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="page-nav text-right">
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
                    </div>
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
        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/Chart.bundle.js')}}"></script>
        <script src="{{asset('assets/js/chart.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
    </div>
@endsection
