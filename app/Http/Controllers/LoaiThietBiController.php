<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoaiThietBiRequest;
use App\Models\LoaiThietBi;
use App\Models\NhomThietBi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoaiThietBiController extends Controller
{
    private $loaiThietBi;
    private $nhomThietBi;

    public function __construct(LoaiThietBi $loaiThietBi, NhomThietBi $nhomThietBi)
    {
        $this->loaiThietBi = $loaiThietBi;
        $this->nhomThietBi = $nhomThietBi;
    }

    public function index()
    {
        $data['loaiThietBis'] = $this->loaiThietBi->paginate(8);
        $data['nhomThietBis'] = $this->nhomThietBi->all();

        return view('LoaiThietBi.list', $data);
    }

    public function getAdd()
    {
        if (Auth::user()->phanQuyen == 1) {
            $data['nhomThietBis'] = $this->nhomThietBi->all();
            return view('LoaiThietBi.add', $data);
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này ');
        }
    }

    public function postAdd(LoaiThietBiRequest $request)
    {
        $this->loaiThietBi->create($request->all());
        return redirect('/admin/loaithietbi')->with('add', 'Thêm mới thành công');
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $dataSearch = $this->loaiThietBi->find($id);
            $nhomThietBi = $this->nhomThietBi->all();
            return view('LoaiThietBi.edit', compact('dataSearch', 'nhomThietBi'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postEdit(Request $request, $id)
    {
        $data = $this->loaiThietBi->find($id);
        $data->update($request->all());
        return redirect('/admin/loaithietbi')->with('update', 'Cập nhật thành công');
    }

    public function search(Request $request)
    {
        if ($request->dataSearch == null) {
            $result = $this->loaiThietBi->where('maNhomThietBi', 'like', '%' . $request->maNhomThietBi . '%')->get();
        } elseif ($request->maNhomThietBi == null) {
            $result = $this->loaiThietBi->where('tenLoaiThietBi', 'like', '%' . $request->dataSearch . '%')
                ->orWhere('maLoaiThietBi', 'like', '%' . $request->dataSearch . '%')->get();
        } else {
            $result = $this->loaiThietBi->where('tenLoaiThietBi', 'like', '%' . $request->dataSearch . '%')
                ->orWhere('maLoaiThietBi', 'like', '%' . $request->dataSearch . '%')
                ->where('manhomThietBi', 'like', '%' . $request->searchThietBiHong . '%')->get();
        }
        $nhomThietBis = $this->nhomThietBi->all();
        return view('LoaiThietBi.list',compact('result','nhomThietBis'));
    }
}
