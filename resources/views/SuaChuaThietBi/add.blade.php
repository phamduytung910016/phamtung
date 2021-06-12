@extends('layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h1 class="card-title" style="font-size: 30px"> Sửa chữa thiết bị</h1>
                    <form action="/admin/suachua/postAdd/{{$baoHong->id}}" method="POST">
                        @csrf
                        <h4 class="card-title"></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mã thiết bị</label>
                                    <input type="text" class="form-control" value="{{$baoHong->ThietBiHong->maThietBi}}">
                                </div>
                                <div class="form-group">
                                    <label>Người lập kế hoạch</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->hoVaTen}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Nghiệm thu</label>
                                    <select class="select" name="nghiemThu">
                                        @foreach ($nghiemThu as $item )
                                            <option value="{{$item->id}}">{{$item->trangThai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ngày sửa chữa</label>
                                    <input type="date" class="form-control" name="ngaySuaChua">
                                </div>
                                <div class="form-group">
                                    <label>Ngày sửa xong</label>
                                    <input type="date" class="form-control" name="ngaySuaXong">
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái trước khi sửa</label>
                                    <input type="text" class="form-control" name="trangThaiTruocKhiSua">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái sau khi sửa</label>
                                    <input type="text" class="form-control" name="trangThaiSauKhiSua">
                                </div>
                                <div class="form-group">
                                    <label>Chi phí</label>
                                    <input type="text" class="form-control" name="chiPhi">
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
