@extends('layout.master')
@section('content')
<div class="page-wrapper" style="min-height: 367px;">








    <style>

    </style>

    <div class="container">

      <div style="font-size: 20px;">Nhập thông tin loại thiết bị</div>

      <hr>

      <form action="http://demo.qltbyt.com/ktv/device_type/add" method="post">

        <input type="hidden" name="_token" value="DZ7BkeMfcTinrovHsfgIG9ypUXAt2LqVbhiirZ5K">
        <div class="row">

          <div class="col-sm-6 offset-3">

            <div class="form-group">

              <label>Loại thiết bị</label>

              <input style="width: 65%" class="form-control" type="text" name="nameDvt">

            </div>

          </div>

          <div class="col-sm-6 offset-3">

            <div class="form-group">

              <label>Mã loại thiết bị</label>

              <input style="width: 65%" class="form-control" type="text" name="idDvt">

            </div>

          </div>

          <div class="col-sm-6 offset-3">

            <div class="form-group">

              <label>Nhóm loại thiết bị<span class="text-danger">*</span></label><br>

              <select style="width: 65%; height: 38px; border: 1px solid #f2f2f2" id="sl_dvt" type="text" name="group" required="">

                <option value="X">X</option>

                <option value="A">A</option>

                <option value="B">B</option>

                <option value="C">C</option>

                <option value="D">D</option>

              </select>

            </div>

          </div>

          <div class="col-sm-6 offset-2 text-center">

            <button class="btn submit-btn" type="submit" value="Lưu" style="background-color: #009efb; color: white; border-radius: 20px"><i class="fa fa-plus"></i> Thêm</button>

            <!-- <div class="canl" style="margin-left: 50px"><a href="http://demo.qltbyt.com/ktv/accessory/list" style="color: white; text-decoration: none;">Hủy</a></div> -->

          </div>

        </div>

      </form>

    </div>








            </div>
@endsection
