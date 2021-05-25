@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 367px;">

        <style>

        </style>

        <div class="container">

            <div style="font-size: 20px;">Nhập thông tin loại thiết bị</div>

            <hr>

            <form action="/admin/loaithietbi/post-edit/{{ $dataSearch->id }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-sm-6 offset-3">

                        <div class="form-group">

                            <label>Loại thiết bị</label>

                            <input style="width: 65%" class="form-control" type="text" name="tenLoaiThietBi"
                                value="{{ $dataSearch->tenLoaiThietBi }}">

                        </div>

                    </div>

                    <div class="col-sm-6 offset-3">

                        <div class="form-group">

                            <label>Mã loại thiết bị</label>

                            <input style="width: 65%" class="form-control" type="text" name="maLoaiThietBi"
                                value="{{ $dataSearch->maLoaiThietBi }}">

                        </div>

                    </div>

                    <div class="col-sm-6 offset-3">

                        <div class="form-group">

                            <label>Nhóm loại thiết bị<span class="text-danger">*</span></label><br>

                            <select style="width: 65%; height: 38px; border: 1px solid #f2f2f2" id="sl_dvt" type="text"
                                name="maNhomLoaiThietBi" required="">

                                @foreach ($nhomThietBi as $item)
                                    <option {{ $dataSearch->maNhomThietBi == $item->maNhomThietBi ? 'selected' : '' }}
                                        value="{{ $item->nhomThietBi }}">{{ $item->tenNhomThietBi }}</option>

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
