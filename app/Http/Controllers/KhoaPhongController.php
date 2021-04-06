<?php

namespace App\Http\Controllers;

use App\Models\KhoaPhong;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\KhoaPhongRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class KhoaPhongController extends Controller
{
    private $khoaPhong;

    public function __construct()
    {
        $this->khoaPhong = new KhoaPhong();
    }

    public function index()
    {
        $rs = KhoaPhong::all();
        return view('KhoaPhong.list', compact('rs'));
    }

    public function search(Request $request)
    {
        if ($request->ten == null) {
            return redirect('/admin/khoaphong')->with('thongbao', 'Mời nhập tên khoa phòng');
        } else {
            $search = KhoaPhong::where('ten', 'like', '%' . $request->ten . '%')->get();
            return view('Khoaphong.list', compact('search'));
        }
    }


    public function getAdd()
    {
        if (Auth::user()->phanQuyen != 3) {
            return view('khoaphong.add');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postAdd(KhoaPhongRequest $request)
    {

        $data = $request->all();
        $this->khoaPhong->create($data);
        return redirect('/admin/khoaphong')->with('add', 'Thêm mới thành công');
    }

    public function delete($id)
    {
        if (Auth::user()->phanQuyen != 3) {
            $data = KhoaPhong::find($id);
            $data->delete($data);
            return redirect('/admin/khoaphong')->with('delete', 'Xóa thành công');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen != 3) {
            $data = KhoaPhong::find($id);
            return view('khoaphong.edit', compact('data'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postEdit(Request $request, $id)
    {
        $data = KhoaPhong::find($id);
        $data->update($request->all());
        return redirect('/admin/khoaphong')->with('update', 'Cập nhật thành công');
    }
}
