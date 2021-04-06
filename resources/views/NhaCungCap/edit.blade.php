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
        <h4 class="page-title">Chỉnh sửa thông tin </h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form action="/admin/nhacungcap/post-edit/{{$rs->id}}" method="post">
            @csrf                 <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nhà cung cấp<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="nameProvider" autocomplete="off" value="{{$rs->tenNhaCungCap}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Địa chỉ<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="address" autocomplete="off" value="{{$rs->diaChi}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Người đại diện<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="representator" autocomplete="off" value="{{$rs->nguoiDaiDien}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Số điện thoại liên hệ<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="phone" autocomplete="off" value="{{$rs->soDienThoai}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <div class="">
                            <input class="form-control" type="email" name="email" autocomplete="off" value="{{$rs->email}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Mã số thuế</label>
                        <div class="">
                            <input class="form-control" type="text" name="tax_number" autocomplete="off" value="{{$rs->maSoThue}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <div class="">
                            <input class="form-control" type="text" name="provider_note" autocomplete="off" value="{{$rs->ghiChu}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-t-20 text-center">
                <button class="btn submit-btn" style="background-color: #009efb; color: white; border-radius: 20px" type="submit">
                Chỉnh sửa
                </button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
