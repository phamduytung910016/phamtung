<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\OrderShipped;
use App\Models\KhoaPhong;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $data['password'] = Hash::make($request->password);
        $user->update($data);
        return redirect('/admin/user')->with('update', 'Cập nhật thành công');
    }
}
