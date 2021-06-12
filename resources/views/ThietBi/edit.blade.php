@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 667px;">
        <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mycss.css') }}">
        <div class="container">
            <div class="form-style-10">
                <h1>Chỉnh sửa thông tin thiết bị<span>Technical information</span></h1>
                <form action="/admin/thietbi/post-edit/{{$data->id}}" class="form-style-9" method="POST">
                    @csrf
                    <div class="inner-wrap">
                        <label>Tên thiết bị <span style="color: red">*</span></label>
                        @error('tenThietBi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" name="tenThietBi"  value="{{ $data->tenThietBi }}">
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Nhóm thiết bị<span style="color: red">*</span>
                            @error('maNhomThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <select type="text" name="maNhomThietBi" id="nhomThietBi">
                                <option value="">Chọn nhóm thiết bị</option>
                                @foreach ($nhomThietBi as $item)
                                    <option value="{{ $item->maNhomThietBi }}">{{ $item->tenNhomThietBi }}</option>
                                @endforeach
                            </select>
                        </label>

                        <label style="width: 30%">Loại thiết bị<span style="color: red">*</span>
                            @error('maLoaiThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <select class="field-style field-split align-right" type="text" name="maLoaiThietBi"
                                id="loaiThietBi">
                                <option value="">Chọn loại thiết bị</option>
                                {{-- @foreach ($loaiThietBi as $item)
                                    <option value="{{ $item->maLoaiThietBi }}">{{ $item->tenLoaiThietBi }}</option>
                                @endforeach --}}
                            </select>
                        </label>

                        <label style="width: 30%">Mức độ rủi ro

                            <select type="text" id="risk" name="mucDoRuiRo">
                                <option value="">Chọn mức độ rủi ro</option>

                                <option {{ $data->mucDoRuiRo == 'A' ? 'selected' : '' }} value="A">A</option>

                                <option {{ $data->mucDoRuiRo == 'B' ? 'selected' : '' }} value="B">B</option>

                                <option {{ $data->mucDoRuiRo == 'C' ? 'selected' : '' }} value="C">C</option>

                                <option {{ $data->mucDoRuiRo == 'D' ? 'selected' : '' }} value="D">D</option>

                            </select>
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Số lượng<span style="color: red">*</span>
                            @error('soLuong')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="soLuong" required="" value="{{ $data->soLuong }}">
                        </label>

                        <label style="width: 30%">Đơn vị tính<span style="color: red">*</span>
                            @error('donViTinh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" id="unit" name="donViTinh" value="{{ $data->donViTinh }}">
                        </label>
                    </div>

                    <div class="inner-wrap">

                        <label style="width: 30%">
                            Serial<span style="color: red">*</span>
                            @error('serial')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="serial" required="" value="{{ $data->serial }}">
                        </label>

                        <label style="width: 30%">Model<span style="color: red">*</span>
                            @error('model')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="model" required="" value="{{ $data->model }}">
                        </label>
                        <label style="width: 30%">Mã thiết bị<span style="color: red">*</span>
                            @error('maThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="maThietBi"  value="{{ $data->maThietBi }}">
                        </label>


                    </div>

                    <div class="inner-wrap">

                        <label style="width: 30%">Hãng sản xuất<span style="color: red">*</span>
                            @error('hangSanXuat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" name="hangSanXuat" required="" value="{{ $data->hangSanXuat }}">
                        </label>

                        <label style="width: 30%">Xuất xứ<span style="color: red">*</span>
                            @error('xuatXu')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" name="xuatXu" required="" value="{{ $data->xuatXu }}">
                        </label>

                        <label style="width: 15%">Năm sản xuất<span style="color: red">*</span>
                            @error('namSanXuat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input class="date-own form-control" name="namSanXuat" required=""
                                value="{{ $data->namSanXuat }}">
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 20%">Kiểm định định kỳ<span style="color: red">*</span>
                            @error('kiemDinhDinhKy')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <select type="number" name="kiemDinhDinhKy">

                                <option value="">Chọn kiểm định</option>

                               @foreach ($kiemDinh as $item )
                                    <option  {{ $data->kiemDinhDinhKy == $item->id ? 'selected' : '' }} value="{{$item->id}}">{{$item->thoiGian}}</option>
                               @endforeach

                            </select>
                        </label>

                        <label style="width: 20%">Ngày kiểm định lần đầu
                            <input type="date" name="ngayKiemDinhLanDau" value="{{ $data->ngayKiemDinhLanDau }}">
                        </label>

                        <label style="width: 20%">Ngày nhập kho
                            <input type="date" id="warehouse_date" name="ngayNhapKho" value="2021-05-03"
                                value="{{ $data->ngayNhapKho }}">
                        </label>

                        <label style="width: 20%">Ngày hết hạn bảo hành
                            <input type="date" name="ngayHetHanBaoHanh" value="{{ $data->ngayHetHanBaoHanh }}">
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 40%">Thông số kỹ thuật
                            <textarea cols="40" rows="3" name="thongSoKyThuat"
                                value="{{ $data->thongSoKyThuat }}"></textarea>
                        </label>

                        <label style="width: 40%">Cấu hình kỹ thuật
                            <textarea cols="40" rows="3" name="cauHinhKyThuat"
                                value="{{ $data->cauHinhKyThuat }}"> </textarea>
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 25%">Giá trị ban đầu<br>
                            <input style="float: left;width: 40%;" type="number" name="giaTriBanDau"
                                value="{{ $data->giaTriBanDau }}">
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>

                        <label style="width: 25%">Khấu hao hàng năm<br>
                            <input style="width: 40%; float: left;" type="number" name="khauHaoHangNam"
                                value="{{ $data->khauHaoHangNam }}">
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>
                        <label style="width: 25%">Giá trị hiện tại<br>
                            <input style="width: 40%; float: left;" type="number" name="giaTriHienTai"
                                value="{{ $data->giaTriHienTai }}">
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>
                    </div>

                    <div class="inner-wrap">


                        <label style="width: 30%">Tình trạng

                            <select type="text" id="status" name="tinhTrang" disabled>
                                <option {{ $data->tinhTrang == 1 ? 'selected' : '' }} value="1">Chưa bàn giao</option>
                                <option {{ $data->tinhTrang == 2 ? 'selected' : '' }} value="2">Đang sử dụng</option>
                                <option {{ $data->tinhTrang == 3 ? 'selected' : '' }} value="3">Đang báo hỏng</option>
                                <option {{ $data->tinhTrang == 4 ? 'selected' : '' }} value="4">Đang sửa chữa</option>
                                <option {{ $data->tinhTrang == 5 ? 'selected' : '' }} value="5">Ngưng sử dụng</option>
                                <option {{ $data->tinhTrang == 6 ? 'selected' : '' }} value="6">Đã thanh lý</option>
                            </select>
                        </label>

                        <label style="width: 15%">Năm sử dụng

                            <input id="use_year" name="namSuDung" value="{{ $data->namSuDung }}">
                        </label>
                    </div>
                    <br><br>

                    <div class="inner-wrap">
                        <label style="width: 50%">Mã cán bộ phòng VT phụ trách<span style="color: red">*</span>
                            <input type="text" id="VT_user" name="maCanBoVatTuPhuTrach"
                                value="{{ $data->CanBoPhuTrach($data->maCanBoVatTuPhuTrach)->maNguoiDung }}" disabled>
                        </label>

                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Nhà cung cấp<span style="color: red">*</span>
                            <select type="text" name="idNhaCungCap" id="nhaCungCap">
                                <option value="">Nhà cung cấp</option>
                                @foreach ($nhaCungCap as $item)
                                    <option value="{{ $item->id }}">{{ $item->tenNhaCungCap }}</option>
                                @endforeach

                            </select>
                        </label>
                    </div>
                    <div class="rows">
                        <div class=" col-sm-2 col-1" style="text-align: center;">
                            <input type="submit" value="Chỉnh sửa"
                                style="float: left; font-size: 15px; margin-left : 800px;"
                                class="btn btn-success btn-rounded">
                        </div>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#nhomThietBi').change(function() {
                var idNhomThietBi = $(this).val();
                $.get('/admin/ajax/loaiThietBi/' + idNhomThietBi, function(data) {
                    //alert(data);
                    $('#loaiThietBi').html(data);
                });
                //alert(idNhomThietBi);
            });
            $('#nhaCungCap').change(function() {
                var idNhaCungCap = $(this).val();
                $.get('/admin/ajax/donViBaoTri/' + idNhaCungCap, function(data) {
                    //alert(data);
                    $('#donViBaoTri').html(data);
                });
                //alert(idNhaCungCap);
            });
        });

    </script>
@endsection
