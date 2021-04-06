@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Thêm người dùng</h4>
                </div>
            </div>
            <form action="/admin/user/postAdd" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Họ và tên <span class="text-danger">*</span></label>
                                    @error('hoVaTen')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input class="form-control" type="text" name="hoVaTen">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input class="form-control" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input class="form-control" type="text" name="diaChi">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password<span class="text-danger">*</span></label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input class="form-control" type="text" name="soDienThoai">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mã người dùng</label>
                                    <input class="form-control" type="text" name="maNguoiDung">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Phân quyền</label>
                                            @error('phanQuyen')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <select class="form-control select" name="phanQuyen">
                                                <option value="">Chọn quyền tương ứng</option>
                                                <option value="1">Quản trị viên</option>
                                                <option value="2">Nhân viên khoa phòng</option>
                                                <option value="3">Nhân viên vật tư</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Khoa phòng</label>
                                            @error('khoaPhong')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <select class="form-control select" name="khoaPhong_id">
                                                <option value="">Chọn khoa phòng tương ứng</option>
                                                @foreach ($khoaPhongs as $khoaPhong)
                                                    <option value="{{ $khoaPhong->id }}">{{ $khoaPhong->ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn" type="submit">Thêm người dùng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
