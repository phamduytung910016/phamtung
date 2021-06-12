<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\KhoaPhong;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    private $user;
    private $khoaPhong;

    public function __construct()
    {
        $this->user = new User();
        $this->khoaPhong = new KhoaPhong();
    }

    public function index()
    {
        $users = $this->user::paginate(20);
        $khoaPhongs = $this->khoaPhong->all();
        return view('NguoiDung.list', compact('users', 'khoaPhongs'));
    }

    public function search(Request $request)
    {
        if ($request->hoVaTen == null) {
            return back()->with('search', 'Bạn chưa nhập tên');
        } else {
            $khoaPhongs = KhoaPhong::all();
            $userSearchs = User::where('hoVaTen', 'like', '%' . $request->hoVaTen . '%')->get();
            return view('NguoiDung.list', compact('userSearchs', 'khoaPhongs'));
        }
    }

    public function getAdd()
    {
        if (Auth::user()->phanQuyen == 1) {
            $khoaPhongs = KhoaPhong::all();
            return view('NguoiDung.add', compact('khoaPhongs'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này ');
        }
    }

    public function postAdd(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $this->user->create($data);
        return redirect('/admin/user')->with('add', 'Thêm thành công');
    }

    public function delete($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $user = User::find($id)->delete();
            return redirect('/admin/user')->with('delete', 'Xóa thành công');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này ');
        }
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $user = User::find($id);
            //$user['password']= Crypt::decrypt($user->password);
            $khoaPhongs = KhoaPhong::all();
            return view('NguoiDung.edit', compact('user', 'khoaPhongs'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này ');
        }
    }

    public function postEdit(Request $request, $id)
    {
        $user = User::find($id);
        $data = $request->all();

        $user->hoVaTen = $data['hoVaTen'];
        $user->soDienThoai = $data['soDienThoai'];
        $user->phanQuyen = $data['phanQuyen'];
        $user->maNguoiDung = $data['maNguoiDung'];
        $user->diaChi = $data['diaChi'];
        $user->khoaPhong_id = $data['khoaPhong_id'];
        $user->save();
        return redirect('/admin/user')->with('update', 'Cập nhật thành công');
    }
}
