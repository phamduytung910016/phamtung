@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 367px;">
        <style>
        </style>
        <div class="container">
            <div style="font-size: 20px;">Bàn giao thiết bị</div>
            <hr>
            <form action="/admin/thietbi/postBanGiao/{{$id}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Khoa phòng sử dụng<span class="text-danger">*</span></label>
                            <select style="width: 65%" class="form-control" type="text" name="idKhoaPhongSuDung"
                                id="idKhoaPhong">
                                @foreach ($khoaPhong as $item)
                                    <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Nhân viên khoa phòng phụ trách<span class="text-danger">*</span></label><br>
                            <select style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="text"
                                name="maCanBoKhoaPhongPhuTrach"  id="maNguoiDung">
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-2 text-center">
                        <button class="btn submit-btn" type="submit" value="Lưu"
                            style="background-color: #009efb; color: white; border-radius: 20px"><i class="fa fa-plus"></i>
                            Bàn giao</button>
                        <!-- <div class="canl" style="margin-left: 50px"><a href="http://demo.qltbyt.com/ktv/accessory/list" style="color: white; text-decoration: none;">Hủy</a></div> -->
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#idKhoaPhong').change(function() {
                var idKhoaPhong = $(this).val();
                $.get('/admin/ajax/user/' + idKhoaPhong, function(data) {
                    // alert(data);
                    $('#maNguoiDung').html(data);
                });
                //alert(idKhoaPhong);
            });
        });
    </script>
@endsection
