@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Khoa Phòng</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('getAdd') }}" class="btn btn-primary btn-rounded float-right"><i
                            class="fa fa-plus"></i>Thêm Khoa Phòng</a>
                </div>
            </div>
            <form action="/admin/khoaphong/search" method="GET">
                @csrf
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <input class="form-control" style=" border-radius: 10px;" type="text" name="ten" placeholder="Nhập tên phòng">
                    </div>
                    <div class="col-sm-1 col-1 text-right m-b-20">
                        <button class="btn btn-rounded float-right" type="submit"
                            style="color: white; background-color: #009efb"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>




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

            <div class="row">
                @if (isset($search))
                    @foreach ($search as $kp)
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget" style="height: 90%">
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/admin/khoaphong/get-edit/{{ $kp->id }}"><i
                                                class="fa fa-pencil m-r-5"></i>
                                            Chỉnh sửa</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor{{ $kp->id }}"><i
                                                class="fa fa-trash-o m-r-5"></i>
                                            Xóa</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">{{ $kp->ten }}</a></h4>
                                <div class="doc-prof">{{ $kp->phongBan }}</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> {{ $kp->diaChi }}
                                </div>
                                <div id="delete_doctor{{ $kp->id }}" class="modal fade delete-modal" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('assets/img/sent.png') }}" alt="" width="50"
                                                    height="46">
                                                <h3>Bạn có muốn xóa {{ $kp->ten }}</h3>
                                                <div class="m-t-20"> <a href="#" class="btn btn-white"
                                                        data-dismiss="modal">Đóng</a>
                                                    <a href="/admin/khoaphong/delete/{{ $kp->id }}"> <button
                                                            type="submit" class="btn btn-danger">Xóa</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row doctor-grid">
                @if (isset($rs))
                    @foreach ($rs as $item)
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget" style="height: 90%">
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i>
                                            Chỉnh sửa</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor{{ $item->id }}"><i class="fa fa-trash-o m-r-5"></i> Xóa</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">{{ $item->ten }}</a></h4>
                                <div class="doc-prof">{{ $item->phongBan }}</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> {{ $item->diaChi }}
                                </div>
                                <div id="delete_doctor{{ $item->id }}" class="modal fade delete-modal" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('assets/img/sent.png') }}" alt="" width="50"
                                                    height="46">
                                                <h3>Bạn có muốn xóa {{ $item->ten }}</h3>
                                                <div class="m-t-20"> <a href="#" class="btn btn-white"
                                                        data-dismiss="modal">Đóng</a>
                                                    <a href="/admin/khoaphong/delete/{{ $item->id }}"> <button
                                                            type="submit" class="btn btn-danger">Xóa</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>


@endsection
