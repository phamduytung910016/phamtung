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
                        <h4 class="page-title">Nhập thông tin đơn vị bảo trì</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="/admin/donvibaotri/post-edit/{{$donViBaoTri->id}}" method="post">
                            @csrf <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nhà cung cấp tương ứng</label>
                                        <select class="form-control select" name="nhaCungCap_id">
                                            @foreach ($nhaCungCaps as $nhaCungCap)
                                                <option {{$donViBaoTri->nhaCungCap->id == $nhaCungCap->id ? 'selected' : '' }} value="{{ $nhaCungCap->id }}">{{ $nhaCungCap->tenNhaCungCap }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tên đơn vị bảo trì<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="diaChi" autocomplete="off" value="{{$donViBaoTri->tenDonViBaoTri}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Địa chỉ<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="diaChi" autocomplete="off" value="{{$donViBaoTri->diaChi}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Người đại diện<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="nguoiDaiDien" autocomplete="off" value="{{$donViBaoTri->nguoiDaiDien}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Số điện thoại liên hệ<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="soDienThoai" autocomplete="off" value="{{$donViBaoTri->soDienThoai}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="">
                                            <input class="form-control" type="email" name="email" autocomplete="off" value="{{$donViBaoTri->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mã số thuế</label>
                                        <div class="">
                                            <input class="form-control" type="text" name="maSoThue" autocomplete="off" value="{{$donViBaoTri->maSoThue}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <div class="">
                                            <input class="form-control" type="text" name="ghiChu" autocomplete="off" value="{{$donViBaoTri->ghiChu}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn submit-btn"
                                    style="background-color: #009efb; color: white; border-radius: 20px" type="submit">
                                    <i class="fa fa-plus"></i>
                                    Xác nhận chỉnh sửa
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
