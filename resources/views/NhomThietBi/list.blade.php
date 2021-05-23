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
                    <a href="{{ route('get_them_nhom_thiet_bi') }}" class="btn btn-rounded float-right"
                        style="background-color: #009efb; color: white"><i class="fa fa-plus"></i> Thêm nhóm thiết bị</a>
                </div>
            </div>

            <!-- tìm kiếm -->

            <form action="{{ route('search_nhom_thiet_bi') }}" method="GET">
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-sm-3 col-3">
                            <input class="form-control" name="search" style=" border-radius: 10px;"
                                placeholder="Tên nhóm thiết bị,Mã nhóm thiết bị" value="">
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
                        <th>Tên nhóm thiết bị</th>

                        <th>Mã nhóm thiết bị</th>

                        <th width="10%">Tùy chọn</th>

                    </tr>

                </thead>

                <tbody>
                    @if (isset($data))
                        @foreach ($data as $item)
                            <tr style="font-size: 15px;">
                                <td>{{ $item->tenNhomThietBi }}</td>
                                <td>{{ $item->maNhomThietBi }}</td>
                                <td style="text-align: center;">
                                    <a href="/admin/nhomthietbi/get-edit/{{ $item->id }}"><i
                                            class="fa fa-pencil-square-o " style="font-size: 20px;" title="Sửa"
                                            aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <a onclick="return confirm('Bạn có chắc chắn xóa?')" href=""><i style="font-size: 20px;"
                                            class="fa fa-trash " title="Xóa" aria-hidden="true"></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if (isset($dataSearch))
                        @foreach ($dataSearch as $itemSearch)
                            <tr style="font-size: 15px;">
                                <td>{{ $itemSearch->tenNhomThietBi }}</td>
                                <td>{{ $itemSearch->maNhomThietBi }}</td>
                                <td style="text-align: center;">
                                    <a href="/admin/nhomthietbi/get-edit/{{ $itemSearch->id }}"><i
                                            class="fa fa-pencil-square-o " style="font-size: 20px;" title="Sửa"
                                            aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <a onclick="return confirm('Bạn có chắc chắn xóa?')" href=""><i style="font-size: 20px;"
                                            class="fa fa-trash " title="Xóa" aria-hidden="true"></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                        @if (isset($data))
                            {{ $data->links() }}
                        @endif

                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
