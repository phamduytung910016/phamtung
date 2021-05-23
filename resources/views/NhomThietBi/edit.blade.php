@extends('layout.master')
@section('content')
<div class="page-wrapper" style="min-height: 367px;">

    <style>

    </style>

    <div class="container">

        <div style="font-size: 20px;">
            <h2>Chỉnh sửa thông tin nhóm thiết bị</h2>
        </div>

        <hr>

        <form action="/admin/nhomthietbi/post-edit/{{$data->id}}" method="POST">
            @csrf

            <div class="row">

                <div class="col-sm-6 offset-3">

                    <div class="form-group">

                        <label>Tên nhóm thiết bị<span class="text-danger">*</span></label>
                        @error('tenNhomThietBi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input style="width: 65%" class="form-control" type="text" name="tenNhomThietBi" value="{{$data->tenNhomThietBi}}">

                    </div>

                </div>

                <div class="col-sm-6 offset-3">

                    <div class="form-group">

                        <label>Mã nhóm thiết bị<span class="text-danger">*</span></label>
                        @error('maNhomThietBi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input style="width: 65%" class="form-control" type="text" name="maNhomThietBi" value="{{$data->maNhomThietBi}}">

                    </div>

                </div>


                <div class="col-sm-6 offset-2 text-center">

                    <button class="btn submit-btn" type="submit" value="Lưu"
                        style="background-color: #009efb; color: white; border-radius: 20px"><i class="fa fa-plus"></i>
                        Xác nhận</button>

                    <!-- <div class="canl" style="margin-left: 50px"><a href="http://demo.qltbyt.com/ktv/accessory/list" style="color: white; text-decoration: none;">Hủy</a></div> -->

                </div>

            </div>

        </form>

    </div>








</div>
@endsection
