@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 667px;">
        <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mycss.css') }}">
        <div class="container">

            <div class="form-style-10">
                <h1>Thông tin thiết bị<span>Technical information</span></h1>
                <form  class="form-style-9" method="POST">
                    @csrf
                    <div class="inner-wrap">
                        <label>Tên thiết bị <span style="color: red">*</span></label>
                        @error('tenThietBi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" name="tenThietBi" required="" value="{{$data->tenThietBi}}" disabled>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Nhóm thiết bị<span style="color: red">*</span>
                            @error('maNhomThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="maNhomThietBi" id="nhomThietBi" value="{{$data->LoaiThietBi->NhomThietBi->tenNhomThietBi}}" disabled>

                        </label>

                        <label style="width: 30%">Loại thiết bị<span style="color: red">*</span>
                            @error('maLoaiThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input class="field-style field-split align-right" type="text" name="maLoaiThietBi"
                                id="loaiThietBi" value="{{$data->LoaiThietBi->tenLoaiThietBi}}" disabled>



                        </label>

                        <label style="width: 30%">Mức độ rủi ro

                            <input type="text" id="risk" name="mucDoRuiRo" value="{{$data->mucDoRuiRo}}" disabled>

                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Số lượng<span style="color: red">*</span>
                            @error('soLuong')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="soLuong" required="" value="{{$data->soLuong}}" disabled>
                        </label>

                        <label style="width: 30%">Đơn vị tính<span style="color: red">*</span>
                            @error('donViTinh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" id="unit" name="donViTinh" value="{{$data->donViTinh}}" disabled>

                        </label>
                    </div>

                    <div class="inner-wrap">

                        <label style="width: 30%">
                            Serial<span style="color: red">*</span>
                            @error('serial')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="serial" required="" value="{{$data->serial}}" disabled>
                        </label>

                        <label style="width: 30%">Model<span style="color: red">*</span>
                            @error('model')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="model" required="" value="{{$data->model}}" disabled>
                        </label>
                        <label style="width: 30%">Mã thiết bị<span style="color: red">*</span>
                            @error('maThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="maThietBi" required="" value="{{$data->maThietBi}}" disabled>
                        </label>


                    </div>

                    <div class="inner-wrap">

                        <label style="width: 30%">Hãng sản xuất<span style="color: red">*</span>
                            @error('hangSanXuat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" name="hangSanXuat" required="" value="{{$data->hangSanXuat}}" disabled>
                        </label>

                        <label style="width: 30%">Xuất xứ<span style="color: red">*</span>
                            @error('xuatXu')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" name="xuatXu" required="" value="{{$data->xuatXu}}" disabled>
                        </label>

                        <label style="width: 15%">Năm sản xuất<span style="color: red">*</span>
                            @error('namSanXuat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input class="date-own form-control" name="namSanXuat" required="" value="{{$data->namSanXuat}}" disabled>
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 20%">Kiểm định định kỳ<span style="color: red">*</span>
                            @error('kiemDinhDinhKy')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="number" name="kiemDinhDinhKy" value="{{$data->KiemDinh->thoiGian}}" disabled>


                        </label>

                        <label style="width: 20%">Ngày kiểm định lần đầu
                            <input type="date" name="ngayKiemDinhLanDau" value="{{$data->ngayKiemDinhLanDau}}" disabled>
                        </label>

                        <label style="width: 20%">Ngày nhập kho
                            <input type="date" id="warehouse_date" name="ngayNhapKho" value="{{$data->warehouse_date}}" disabled>
                        </label>

                        <label style="width: 20%">Ngày hết hạn bảo hành
                            <input type="date" name="ngayHetHanBaoHanh" value="{{$data->ngayHetHanBaoHanh}}" disabled>
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 40%">Thông số kỹ thuật
                            <textarea cols="40" rows="3" name="thongSoKyThuat" value="{{$data->thongSoKyThuat}}" disabled></textarea>
                        </label>

                        <label style="width: 40%">Cấu hình kỹ thuật
                            <textarea cols="40" rows="3" name="cauHinhKyThuat" value="{{$data->cauHinhKyThuat}}" disabled> </textarea>
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 25%">Giá trị ban đầu<br>
                            <input style="float: left;width: 40%;" type="number" name="giaTriBanDau" value="{{$data->giaTriBanDau}}" disabled>
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>

                        <label style="width: 25%">Khấu hao hàng năm<br>
                            <input style="width: 40%; float: left;" type="number" name="khauHaoHangNam" value="{{$data->khauHaoHangNam}}" disabled>
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>
                        <label style="width: 25%">Giá trị hiện tại<br>
                            <input style="width: 40%; float: left;" type="number" name="giaTriHienTai" value="{{$data->giaTriHienTai}}" disabled>
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>
                    </div>

                    <div class="inner-wrap">


                        <label style="width: 30%">Tình trạng
                            <input type="text" id="status" name="tinhTrang" value="{{$data->TinhTrang->tinhTrang}}" disabled>

                        </label>

                        <label style="width: 15%">Năm sử dụng

                            <input id="use_year" name="namSuDung" value="{{$data->namSuDung}}" disabled>
                        </label>
                    </div>
                    <br><br>

                    <div class="inner-wrap">
                        <label style="width: 50%"> Cán bộ phòng VT phụ trách<span style="color: red">*</span>
                            {{-- <input type="text" id="VT_user" name="maCanBoVatTuPhuTrach" value="{{ Auth::user()->maNguoiDung }}"
                                disabled> --}}
                            <input name="maCanBoVatTuPhuTrach" value="{{ $data->CanBoPhuTrach($data->maCanBoVatTuPhuTrach)->hoVaTen }}" disabled>

                        </label>

                    </div>
                    <div class="inner-wrap">
                        <label style="width: 50%"> Cán bộ khoa phòng phụ trách
                            {{-- <input type="text" id="VT_user" name="maCanBoVatTuPhuTrach" value="{{ Auth::user()->maNguoiDung }}"
                                disabled> --}}
                            <input name="maCanBoVatTuPhuTrach" value="{{ $data->CanKhoaPhongPhuTrach($data->maCanBoKhoaPhongPhuTrach)->hoVaTen }}" disabled>

                        </label>

                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Nhà cung cấp
                            <input type="text" name="idNhaCungCap" id="nhaCungCap" value="{{$data->NhaCungCap->tenNhaCungCap}}" disabled>


                        </label>
                    </div>
                </form>
                <br><br>
            </div>
            {{-- <script>
                var today = new Date();

                var dd = today.getDate();

                var mm = today.getMonth() + 1;

                var yyyy = today.getFullYear();

                if (dd < 10)

                {

                    dd = '0' + dd;

                }

                if (mm < 10)

                {

                    mm = '0' + mm;

                }

                var today_str = dd + '.' + mm + '.' + yyyy;

                var g = 'X';

                var dvt = 'XXX';

                var text;

                var dv = '60';

                console.log(dv);

                $(document).ready(function() {



                    $('#group').on('change', function() {

                        $('#searchDvt').html('');

                        $.ajaxSetup({

                            headers: {

                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                            }

                        });

                        g = $("#group option:selected").val();

                        //  alert("Selected Option Text: "+optionText);

                        if (g != '')

                        {

                            $.ajax({

                                url: "http://ubhn.qltbyt.com/ktv/device/add/success",

                                method: "POST", // phương thức gửi dữ liệu.

                                data: {
                                    query: g
                                },

                                success: function(data) { //dữ liệu nhận về

                                    console.log(data);

                                    $('#searchDvt').html(data.msg);

                                },

                                error: function(err) {

                                    console.log("Co loi xay ra");

                                }

                            })

                        }



                    });



                    $('#searchDvt').on('change', function() {

                        dvt = $("#searchDvt option:selected").val();

                    });



                    $('#luu').click(function() {

                        text = g + dvt + '-' + today_str + '-' + dv;



                        $('#dvId').val(text);

                    });

                });

            </script> --}}
        </div>
    </div>
@endsection

