@extends('layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h1 class="card-title" style="font-size: 30px"> Kế hoạch sửa chữa thiết bị</h1>
                    <form action="/admin/suachua/postEdit/{{$lichSuaChua->id}}" method="POST">
                        @csrf
                        <h4 class="card-title"></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mã thiết bị</label>
                                    <input type="text" class="form-control" value="{{$lichSuaChua->ThietBiSuaChua->maThietBi}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Người lập kế hoạch</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->hoVaTen}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Nghiệm thu</label>
                                    <select class="select" name="nghiemThu">
                                        @foreach ($nghiemThu as $item )
                                            <option {{ $lichSuaChua->nghiemThu == $item->id ? 'selected' : '' }} value="{{$item->id}}">{{$item->trangThai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ngày sửa chữa</label>
                                    <input type="date" class="form-control" name="ngaySuaChua" value="{{$lichSuaChua->ngaySuaChua}}">
                                </div>
                                <div class="form-group">
                                    <label>Ngày sửa xong</label>
                                    <input type="date" class="form-control" name="ngaySuaXong" value="{{$lichSuaChua->ngaySuaXong}}">
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái trước khi sửa</label>
                                    <input type="text" class="form-control" name="trangThaiTruocKhiSua" value="{{$lichSuaChua->trangThaiTruocKhiSua}}">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái sau khi sửa</label>
                                    <input type="text" class="form-control" name="trangThaiSauKhiSua" value="{{$lichSuaChua->trangThaiSauKhiSua}}">
                                </div>
                                <div class="form-group">
                                    <label>Chi phí</label>
                                    <input type="text" class="form-control" name="chiPhi" value="{{$lichSuaChua->chiPhi}}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
