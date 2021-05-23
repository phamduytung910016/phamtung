@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 367px;">


        <style>

        </style>

        <div class="container">

            <div style="font-size: 20px;">Nhập thông tin loại thiết bị</div>

            <hr>

            <form action="{{ route('post_them_loai_thiet_bi') }}" method="post">
                @csrf
                <input type="hidden" name="_token" value="DZ7BkeMfcTinrovHsfgIG9ypUXAt2LqVbhiirZ5K">
                <div class="row">
                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Tên loại thiết bị<span class="text-danger">*</span></label>
                            @error('tenLoaiThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input style="width: 65%" class="form-control" type="text" name="tenLoaiThietBi">
                        </div>
                    </div>

                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Mã loại thiết bị<span class="text-danger">*</span></label>
                            @error('maLoaiThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input style="width: 65%" class="form-control" type="text" name="maLoaiThietBi">
                        </div>
                    </div>

                    <div class="col-sm-6 offset-3">
                        <div class="form-group">
                            <label>Nhóm thiết bị<span class="text-danger">*</span></label><br>
                            @error('maNhomThietBi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <select style="width: 65%; height: 38px; border: 1px solid #f2f2f2" id="sl_dvt" type="text"
                                name="maNhomThietBi" required="">
                                @foreach ($nhomThietBis as $nhomThietBi)
                                    <option value="{{ $nhomThietBi->maNhomThietBi }}">{{ $nhomThietBi->tenNhomThietBi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 offset-2 text-center">

                        <button class="btn submit-btn" type="submit" value="Lưu"
                            style="background-color: #009efb; color: white; border-radius: 20px"><i class="fa fa-plus"></i>
                            Thêm</button>

                        <!-- <div class="canl" style="margin-left: 50px"><a href="http://demo.qltbyt.com/ktv/accessory/list" style="color: white; text-decoration: none;">Hủy</a></div> -->

                    </div>

                </div>

            </form>

        </div>

    </div>
@endsection
