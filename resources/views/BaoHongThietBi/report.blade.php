@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 367px;">
        <style>
        </style>
        <div class="container">
            <div style="font-size: 20px;"><h1>Báo hỏng thiết bị</h1></div>
            <hr>
            <form action="/admin/baohong/postAdd/{{$data->id}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Tên thiết bị<span class="text-danger">*</span></label>
                            <input style="width: 65%" class="form-control" type="text" value="{{$data->tenThietBi}}"
                                id="idKhoaPhong" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Mã thiết bị<span class="text-danger">*</span></label>
                            <input style="width: 65%" class="form-control" type="text" value="{{$data->maThietBi}}"
                                id="idKhoaPhong" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Khoa phòng phụ trách<span class="text-danger">*</span></label><br>
                            <input style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="text"
                              value="{{$data->KhoaPhongSuDung->ten}}">
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Người báo hỏng<span class="text-danger">*</span></label><br>
                            <input style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="text"
                              value="{{Auth::user()->hoVaTen}}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Ngày báo hỏng</label><br>
                            <input style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="date"
                              name="ngayBaoHong">
                        </div>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Lý do</label><br>
                            <input style="width: 65%; height: 38px; border: 1px solid #f2f2f2" type="text"
                              name="lyDo">
                        </div>
                    </div>
                    <div class="col-sm-6 offset-2 text-center">
                        <button class="btn submit-btn" type="submit" value="Lưu"
                            style="background-color: #009efb; color: white; border-radius: 20px"><i class="fa fa-plus"></i>
                            Báo hỏng</button>
                        <!-- <div class="canl" style="margin-left: 50px"><a href="http://demo.qltbyt.com/ktv/accessory/list" style="color: white; text-decoration: none;">Hủy</a></div> -->
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('script')
@endsection
