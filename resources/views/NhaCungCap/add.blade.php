@extends('layout.master')
@section('content')
<div class="page-wrapper" style="min-height: 667px;">
    <style>
</style>
<div class="container">
<br>
<div class="content">
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <h4 class="page-title">Nhập thông tin nhà cung cấp</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form action="{{route('post_them_nha_cung_cap')}}" method="post">
            @csrf                 <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nhà cung cấp<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="tenNhaCungCap" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Địa chỉ<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="diaChi" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Người đại diện<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="nguoiDaiDien" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Số điện thoại liên hệ<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="soDienThoai" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <div class="">
                            <input class="form-control" type="email" name="email" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Mã số thuế</label>
                        <div class="">
                            <input class="form-control" type="text" name="maSoThue" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <div class="">
                            <input class="form-control" type="text" name="ghiChu" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-t-20 text-center">
                <button class="btn submit-btn" style="background-color: #009efb; color: white; border-radius: 20px" type="submit">
                    <i class="fa fa-plus"></i>
                Thêm
                </button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
