@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Chỉnh sửa </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="/admin/user/post-edit/{{ $user->id }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Họ và tên <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="hoVaTen" value="{{ $user->hoVaTen }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input class="form-control" type="text" name="diaChi" value="{{ $user->diaChi }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="password" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input class="form-control" type="text" name="soDienThoai"
                                        value="{{ $user->soDienThoai }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mã người dùng</label>
                                    <input class="form-control" type="text" name="maNguoiDung"
                                        value="{{ $user->maNguoiDung }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Phân quyền</label>
                                            <select class="form-control select" name="phanQuyen">
                                                <option {{ $user->phanQuyen == 1 ? 'selected' : '' }} value=1>
                                                    Quản trị viên</option>
                                                <option {{ $user->phanQuyen == 2 ? 'selected' : '' }}
                                                    value=2>Nhân viên khoa phòng</option>
                                                <option {{ $user->phanQuyen == 3 ? 'selected' : '' }}
                                                    value=3>Nhân viên vật tư</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Khoa phòng</label>
                                            <select class="form-control select" name="khoaPhong_id">
                                                @foreach ($khoaPhongs as $khoaPhong)
                                                    <option {{ $user->khoaPhong_id == $khoaPhong->id ? 'selected' : '' }}
                                                        value="{{ $khoaPhong->id }}">{{ $khoaPhong->ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Xác nhận chỉnh sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
