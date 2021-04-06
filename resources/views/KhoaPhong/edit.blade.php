@extends('layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Chỉnh sửa khoa Phòng</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="/admin/khoaphong/post-edit/{{$data->id}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Phòng Ban</label>
                                <input name="ten" class="form-control" type="text" value="{{$data->ten}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input name="diaChi" class="form-control" type="text" value="{{$data->diaChi}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary submit-btn">Xác nhận chỉnh sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
