<?php

namespace App\Http\Controllers;

use App\Http\Requests\NhomThietBiRequest;
use App\Models\NhomThietBi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NhomThietBiController extends Controller
{
    private $nhomThietBi;
    public function __construct(NhomThietBi $nhomThietBi)
    {
        $this->nhomThietBi = $nhomThietBi;
    }

    public function index()
    {
        $data = $this->nhomThietBi->paginate(7);
        return view('NhomThietBi.list', compact('data'));
    }

    public function getAdd()
    {
        if (Auth::user()->phanQuyen == 1) {
            return view('NhomThietBi.add');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này ');
        }
    }

    public function postAdd(NhomThietBiRequest $request)
    {
        $this->nhomThietBi->create($request->all());
        return redirect('/admin/nhomthietbi')->with('add', 'Thêm mới thành công');
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $data = $this->nhomThietBi->find($id);
            return view('NhomThietBi.edit', compact('data'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này ');
        }
    }

    public function postEdit(NhomThietBiRequest $request, $id)
    {
        $data = $this->nhomThietBi->find($id);
        $data->update($request->all());
        return redirect('/admin/nhomthietbi')->with('update', 'Cập nhật thành công');
    }

    public function search(Request $request)
    {
        $dataSearch = $this->nhomThietBi->where('maNhomThietBi', 'like', '%' . $request->search . '%')->orWhere('tenNhomThietBi', 'like', '%' . $request->search . '%')->get();
        return view('NhomThietBi.list',compact('dataSearch'));
    }
}
