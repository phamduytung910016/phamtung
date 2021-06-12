@extends('layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg2" style="background-color: #ffc107"><i class="fa fa-user-o"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$user}}</h3>
                        <span class="widget-title2" style="background-color: #ffc107">Người dùng<i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$khoaPhong}}</h3>
                        <span class="widget-title3">Khoa phòng<i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4" style="background-color: #009efb "><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$thietBiChuaBanGiao}}</h3>
                        <span class="widget-title4" style="background-color: #009efb">Thiết bị chưa bàn giao<i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4" style="background-color:#79CDCD "><i class="fa fa-user-md" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$thietBiDangSuDung}}</h3>
                        <span class="widget-title4" style="background-color:#79CDCD ">Thiết bị đang sử dụng<i class="fa fa-check" aria-hidden="true"></i></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4" style="background-color: red"><i class="fa fa-flag-o" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$thietBiBaoHong}}</h3>
                        <span class="widget-title4" style="background-color: red">Thiết bị hỏng<i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4" style="background-color: yellowgreen"><i class="fa fa-wrench" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$thietBiSuaChua}}</h3>
                        <span class="widget-title4" style="background-color: yellowgreen">Thiết bị đang sửa chữa<i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4" style="background-color: rgb(100, 91, 91)"><i class="fa fa-flag-o" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$thietBiNgungSuDung}}</h3>
                        <span class="widget-title4" style="background-color: rgb(82, 76, 76)">Thiết bị ngưng dùng<i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4" style="background-color: black"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>{{$thietBiThanhLy}}</h3>
                        <span class="widget-title4" style="background-color: black">Thiết bị thanh lý <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
