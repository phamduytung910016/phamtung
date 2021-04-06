@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Thêm Khoa Phòng</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="POST" action="/admin/khoaphong/postAdd">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Khoa Phòng <span class="text-danger">*</span></label>
                                    @error('ten')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input name="ten" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Địa chỉ <span class="text-danger">*</span></label>
                                    @error('diaChi')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input name="diaChi" class="form-control" type="text">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit-btn">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
