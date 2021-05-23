@extends('layout.master')
@section('content')
    <div class="page-wrapper" style="min-height: 367px;">
        <style type="text/css">
            input[type=text],
            select[type=text] {

                padding: 3px;

                font-size: 20px;

                border: #A4A4A4 solid 1px;

            }

            .btnsearch:hover {

                background-color: #BDBDBD;

            }

            .container2 {

                margin: 20px;

                margin-top: 30px;

            }

            h2 {

                margin-left: 20px;

                font-weight: bold;

            }

            table th {

                text-align: center;

            }

        </style>
        <div class="content">
            <div class="row">
                <div style="font-size" :20px="" class="col-sm-4 col-3">
                    <h4 class="page-title">Danh sách loại thiết bị</h4>
                </div>
                <div class="col-sm-4 col-5 text-right m-b-10">
                </div>
                <div class="col-sm-4 col-4 text-right m-b-10">
                    <a href="{{ route('get_them_loai_thiet_bi') }}" class="btn btn-rounded float-right"
                        style="background-color: #009efb; color: white"><i class="fa fa-plus"></i> Thêm loại thiết bị</a>
                </div>

            </div>

            <!-- tìm kiếm -->

            <form action="" method="GET">
                <div class="content">
                    <div class="row">

                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="import_id" style=" border-radius: 10px;"
                                placeholder="Tên loại thiết bị | Mã loại thiết bị" value="">
                        </div>

                        <div class="col-sm-3 col-3">

                            <select style=" height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1" name="dv_group"
                                class="form-control">

                                <option value="">Chọn nhóm thiết bị</option>

                                @foreach ($nhomThietBis as $nhomThietBi)
                                    <option value="{{ $nhomThietBi->tenNhomThietBi }}">{{ $nhomThietBi->tenNhomThietBi }}
                                    </option>
                                @endforeach



                            </select>
                        </div>

                        <div class="col-sm-3 col-3">

                            <button class="btn btn-rounded " style="background-color: #009efb; color: white;float: right;"
                                type="submit"><i class="fa fa-search"></i>
                                Tìm kiếm</button>

                        </div>

                        <!-- <div class="col-sm-1 col-1">

                          <b>Tất cả: 17</b>

                        </div> -->

                    </div>

                    <br>

                </div>

            </form>

            <!--  -->



            @if (session('add'))
                <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('add') }}</strong>
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('delete') }}</strong>
                </div>
            @endif
            @if (session('update'))
                <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('update') }}</strong>
                </div>
            @endif
            @if (session('quyen'))
                <div class="alert alert-danger alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('quyen') }}</strong>
                </div>
            @endif

            <table class="table table-condensed table-bordered table-hover text-center">

                <thead style="background-color: #009efb; color: white">

                    <tr>
                        <th>Mã loại thiết bị</th>

                        <th>Tên loại thiết bị</th>

                        <th>Nhóm thiết bị</th>

                        <th width="10%">Tùy chọn</th>
                    </tr>

                </thead>

                <tbody>

                    @if (isset($loaiThietBis))
                    @foreach ($loaiThietBis as $loaiThietBi )
                    <tr style="font-size: 15px;">

                        <td>{{$loaiThietBi->maLoaiThietBi}}</td>

                        <td>{{$loaiThietBi->tenLoaiThietBi}}</td>

                        <td>{{$loaiThietBi->NhomThietBi->tenNhomThietBi}}</td>

                        <td style="text-align: center;">

                            <a href=""><i class="fa fa-pencil-square-o " style="font-size: 20px;" title="Sửa"
                                    aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <a onclick="return confirm('Bạn có chắc chắn xóa?')" href=""><i style="font-size: 20px;"
                                    class="fa fa-trash " title="Xóa" aria-hidden="true"></i></a>

                        </td>
                    </tr>
                    @endforeach
                    @endif



                </tbody>

            </table>

            <div class="page-nav text-right">

                <nav aria-label="Page navigation">

                    <nav>
                        <ul class="pagination">
                            @if (isset($loaiThietBis))
                            {{$loaiThietBis->links()}}
                            @endif
                        </ul>
                    </nav>

                </nav>

            </div>

        </div>
    </div>
@endsection
