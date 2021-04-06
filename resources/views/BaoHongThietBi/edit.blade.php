@extends('layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2" style="width:60% ;height:30%">
                <h4 class="page-title">Phiếu báo hỏng</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="/admin/thietbihong/post-edit/{{$thietBiHong->id}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Người báo hỏng<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="tenNguoiDung" value="{{Auth::user()->hoVaTen}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Khoa phòng</label>
                                <input class="form-control" type="text" name="khoaPhong" value="{{Auth::user()->khoaPhong->ten}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">

                                 <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Tên thiết bị <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="tenThietBi" value="{{$thietBiHong->tenThietBi}}">
                                    </div>
                                </div><div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <input type="text" class="form-control" name="ghiChu" value="{{$thietBiHong->ghiChu}}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Serial</label>
                                        <input type="text" class="form-control" name="serial" value="{{$thietBiHong->serial}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Model</label>
                                        <input type="text" class="form-control" name="model" value="{{$thietBiHong->model}}">
                                    </div>
                                </div><div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Mã thiết bị</label>
                                        <input type="text" class="form-control" name="maThietBi" value="{{$thietBiHong->maThietBi}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Trạng thái</label>
                                    <div>
                                        <input type="text" class="form-control datetimepicker"  name="trangThai" value="{{$thietBiHong->trangThai}}">
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Ảnh thiết bị</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="assets/img/user.jpg">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>File liên quan</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="assets/img/user.jpg">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div></div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Xác nhận chỉnh sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
