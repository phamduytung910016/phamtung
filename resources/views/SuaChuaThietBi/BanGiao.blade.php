@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 367px;">
        <style>
        </style>
        <div class="container">
            <div style="font-size: 20px;"><h1>Bàn giao lại thiết bị sau khi sửa chữa</h1></div>
            <hr>
            <form action="/admin/suachua/postBanGiao/{{$data->id}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Mã thiết bị<span class="text-danger">*</span></label>
                            <input style="width: 65%" class="form-control" type="text" value="{{$data->ThietBiSuaChua->maThietBi}}"
                             disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Khoa phòng phụ trách<span class="text-danger">*</span></label><br>
                            <input style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="text"
                              value="{{$data->ThietBiSuaChua->KhoaPhongSuDung->ten}}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Cán bộ khoa phòng phụ trách<span class="text-danger">*</span></label><br>
                            <input style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="text"
                              value="{{$data->ThietBiSuaChua->CanKhoaPhongPhuTrach($data->ThietBiSuaChua->maCanBoKhoaPhongPhuTrach)->hoVaTen}}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Tình trạng sau khi sửa</label><br>
                            <input style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="text"
                              value="{{$data->NghiemThu->trangThai}}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-2 text-center">
                        <button class="btn submit-btn" type="submit" value="Lưu"
                            style="background-color: #009efb; color: white; border-radius: 20px"><i class="fa fa-plus"></i>
                            Bàn giao lại</button>
                        <!-- <div class="canl" style="margin-left: 50px"><a href="http://demo.qltbyt.com/ktv/accessory/list" style="color: white; text-decoration: none;">Hủy</a></div> -->
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('script')
@endsection
