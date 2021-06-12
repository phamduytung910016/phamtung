@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 667px;">
        <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mycss.css') }}">
        <div class="container">

            <div class="form-style-10">
                <h1>Nhập thông tin thiết bị<span>Technical information</span></h1>
                <form action="{{ route('post_them_thiet_bi') }}" class="form-style-9" method="POST">
                    @csrf
                    <div class="inner-wrap">
                        <label>Tên thiết bị <span style="color: red">*</span></label>
                        @error('tenThietBi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" name="tenThietBi" required="">
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

                                <option value="A">A</option>

                                <option value="B">B</option>

                                <option value="C">C</option>

                                <option value="D">D</option>

                            </select>
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Số lượng<span style="color: red">*</span>
                            @error('soLuong')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="soLuong" required="">
                        </label>

                        <label style="width: 30%">Đơn vị tính<span style="color: red">*</span>
                            @error('donViTinh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" id="unit" name="donViTinh">

                        </label>
                    </div>

                    <div class="inner-wrap">

                        <label style="width: 30%">
                            Serial<span style="color: red">*</span>
                            @error('serial')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="serial" required="">
                        </label>

                        <label style="width: 30%">Model<span style="color: red">*</span>
                            @error('model')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="model" required="">
                        </label>
                        <label style="width: 30%">Mã thiết bị<span style="color: red">*</span>
                            @error('maThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="maThietBi" required="">
                        </label>


                    </div>

                    <div class="inner-wrap">

                        <label style="width: 30%">Hãng sản xuất<span style="color: red">*</span>
                            @error('hangSanXuat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" name="hangSanXuat" required="">
                        </label>

                        <label style="width: 30%">Xuất xứ<span style="color: red">*</span>
                            @error('xuatXu')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="text" name="xuatXu" required="">
                        </label>

                        <label style="width: 15%">Năm sản xuất<span style="color: red">*</span>
                            @error('namSanXuat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input class="date-own form-control" name="namSanXuat" required="">
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 20%">Kiểm định định kỳ<span style="color: red">*</span>
                            @error('kiemDinhDinhKy')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <select type="number" name="kiemDinhDinhKy">

                                <option value="">Lựa chọn</option>

                                @foreach ($kiemDinh as $item )
                                   <option value="{{$item->id}}">{{$item->thoiGian}}</option>
                                @endforeach

                            </select>
                        </label>

                        <label style="width: 20%">Ngày kiểm định lần đầu
                            <input type="date" name="ngayKiemDinhLanDau">
                        </label>

                        <label style="width: 20%">Ngày nhập kho
                            <input type="date" id="warehouse_date" name="ngayNhapKho" value="2021-05-03">
                        </label>

                        <label style="width: 20%">Ngày hết hạn bảo hành
                            <input type="date" name="ngayHetHanBaoHanh">
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 40%">Thông số kỹ thuật
                            <textarea cols="40" rows="3" name="thongSoKyThuat"></textarea>
                        </label>

                        <label style="width: 40%">Cấu hình kỹ thuật
                            <textarea cols="40" rows="3" name="cauHinhKyThuat"> </textarea>
                        </label>
                    </div>

                    <div class="inner-wrap">
                        <label style="width: 25%">Giá trị ban đầu<br>
                            <input style="float: left;width: 40%;" type="number" name="giaTriBanDau">
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>

                        <label style="width: 25%">Khấu hao hàng năm<br>
                            <input style="width: 40%; float: left;" type="number" name="khauHaoHangNam">
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>
                        <label style="width: 25%">Giá trị hiện tại<br>
                            <input style="width: 40%; float: left;" type="number" name="giaTriHienTai">
                            <p style="margin: 12px 0px 10px ; font-weight: bold;">&nbsp; (%)</p>
                        </label>
                    </div>

                    <div class="inner-wrap">


                        <label style="width: 30%">Tình trạng

                            <select type="text" id="status" name="tinhTrang">
                                <option value="1">Chưa bàn giao</option>
                                {{-- <option value="2">Đang sử dụng</option>
                                <option value="3">Đang báo hỏng</option>
                                <option value="4">Đang sửa chữa</option>
                                <option value="5">Ngưng sử dụng</option>
                                <option value="6">Đã thanh lý</option> --}}
                            </select>
                        </label>

                        <label style="width: 15%">Năm sử dụng

                            <input id="use_year" name="namSuDung">
                        </label>
                    </div>
                    <br><br>

                    <div class="inner-wrap">
                        <label style="width: 50%">Mã cán bộ phòng VT phụ trách<span style="color: red">*</span>
                            {{-- <input type="text" id="VT_user" name="maCanBoVatTuPhuTrach" value="{{ Auth::user()->maNguoiDung }}"
                                disabled> --}}
                            <select name="maCanBoVatTuPhuTrach" id="">
                                <option value="{{ Auth::user()->maNguoiDung }}">{{ Auth::user()->hoVaTen }}</option>
                            </select>
                        </label>

                    </div>

                    <div class="inner-wrap">
                        <label style="width: 30%">Nhà cung cấp
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
                            <input type="submit" value="Nhập thiết bị"
                                style="float: left; font-size: 15px; margin-left : 800px"
                                class="btn btn-success btn-rounded">
                        </div>
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
