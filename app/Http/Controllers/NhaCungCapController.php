<?php

namespace App\Http\Controllers;

use App\Http\Requests\NhaCungCapRequest;
use App\Models\NhaCungCapModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NhaCungCapController extends Controller
{
    private $nhacungcap;

    public function __construct(NhaCungCapModel $nhacungcap)
    {
        return $this->nhacungcap = $nhacungcap;
    }

    public function index()
    {
        $data = $this->nhacungcap::paginate(10);
        return view('NhaCungCap.list', compact('data'));
    }

    public function search(Request $request)
    {
        $search = $this->nhacungcap->where('tenNhaCungCap', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('nguoiDaiDien', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('soDienThoai', 'like', '%' . $request->dataSearch . '%')
            ->get();
        return view('NhaCungCap.list', compact('search'));
    }


    public function getAdd()
    {
        if (Auth::user()->phanQuyen == 1) {
            return view('NhaCungCap.add');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postAdd(NhaCungCapRequest $request)
    {
        $this->nhacungcap->create($request->all());
        return redirect()->route('list_nha_cung_cap')->with('add', 'Thêm mới thành công');
    }

    public function delete($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $this->nhacungcap->find($id)->delete();
            return redirect()->route('list_nha_cung_cap')->with('delete', 'Xóa thành công');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $rs = $this->nhacungcap->find($id);
            return view('NhaCungCap.edit', compact('rs'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postEdit(Request $request, $id)
    {
        $this->nhacungcap->find($id)->update($request->all());
        return redirect()->route('list_nha_cung_cap')->with('update', 'Chỉnh sửa thành công');
    }
}
