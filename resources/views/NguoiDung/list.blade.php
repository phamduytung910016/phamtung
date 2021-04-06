@extends('layout.master')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Danh sách người dùng</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('getAddUser') }}" class="btn btn-primary btn-rounded float-right"><i
                            class="fa fa-plus"></i> Thêm người
                        dùng</a>
                </div>
            </div>
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
            <form action="{{ route('searchUser') }}" method="GET">
                @csrf
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <input class="form-control" style=" border-radius: 10px;" placeholder="Họ tên" name="hoVaTen"
                            value="">
                    </div>
                    <div class="col-sm-1 col-1 text-right m-b-20">
                        <button class="btn btn-rounded float-right" type="submit"
                            style="color: white; background-color: #009efb"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>


            <div class="row doctor-grid">
                @if (isset($userSearchs))
                    @foreach ($userSearchs as $userSearch)
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/admin/user/get-edit/{{ $userSearch->id }}"><i
                                                class="fa fa-pencil m-r-5"></i>
                                            Chỉnh sửa</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor{{ $userSearch->id }}"><i
                                                class="fa fa-trash-o m-r-5"></i> Xóa</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis">{{ $userSearch->hoVaTen }}</h4>
                                <div class="doc-prof">
                                    @switch($userSearch->phanQuyen)
                                        @case(1)
                                        <div class="doc-prof">Quản trị viên</div>
                                        @break
                                        @case(2)
                                        <div class="doc-prof">Nhân viên khoa phòng</div>
                                        @break
                                        @case(3)
                                        <div class="doc-prof">Nhân viên vật tư</div>
                                        @break
                                        @default
                                    @endswitch
                                </div>

                                <div class="user-country">
                                    @if (isset($userSearch->khoaPhong->ten))
                                        <i class="fa fa-map-marker"></i>{{ $userSearch->khoaPhong->ten }}
                                    @else
                                        <i class="fa fa-map-marker"></i>Chưa có khoa phòng
                                    @endif
                                </div>
                            </div>
                            <div id="delete_doctor{{ $userSearch->id }}" class="modal fade delete-modal" role="dialog">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('assets/img/sent.png') }}" alt="" width="50" height="46">
                                            <h3>Bạn có muốn xóa {{ $userSearch->hoVaTen }}</h3>
                                            <div class="m-t-20"> <a href="#" class="btn btn-white"
                                                    data-dismiss="modal">Đóng</a>
                                                <a href="/admin/user/delete/{{ $userSearch->id }}"> <button
                                                        class="btn btn-danger">Xóa</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                @if (isset($users))
                    @foreach ($users as $user)
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget" style="height: 80%">
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/admin/user/get-edit/{{ $user->id }}"><i
                                                class="fa fa-pencil m-r-5"></i>
                                            Chỉnh sửa</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor{{ $user->id }}"><i
                                                class="fa fa-trash-o m-r-5"></i>
                                            Xóa</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis">{{ $user->hoVaTen }}</h4>
                                @switch($user->phanQuyen)
                                    @case(1)
                                    <div class="doc-prof">Quản trị viên</div>
                                    @break
                                    @case(2)
                                    <div class="doc-prof">Nhân viên khoa phòng</div>
                                    @break
                                    @case(3)
                                    <div class="doc-prof">Nhân viên vật tư</div>
                                    @break
                                    @default
                                @endswitch

                                <div class="user-country">
                                    @if (isset($user->khoaPhong->ten))


                                        <i class="fa fa-map-marker"></i>{{ $user->khoaPhong->ten }}
                                    @else
                                        <i class="fa fa-map-marker"></i>Chưa có khoa phòng
                                    @endif
                                </div>
                            </div>
                            <div id="delete_doctor{{ $user->id }}" class="modal fade delete-modal" role="dialog">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('assets/img/sent.png') }}" alt="" width="50" height="46">
                                            <h3>Bạn có muốn xóa {{ $user->hoVaTen }}</h3>
                                            <div class="m-t-20"> <a href="#" class="btn btn-white"
                                                    data-dismiss="modal">Đóng</a>
                                                <a href="/admin/user/delete/{{ $user->id }}"> <button type="submit"
                                                        class="btn btn-danger">Xóa</button></a>
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
