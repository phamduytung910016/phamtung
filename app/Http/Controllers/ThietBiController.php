<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThietBiEditRequest;
use App\Http\Requests\ThietBiRequest;
use App\Models\DonViBaoTriModel;
use App\Models\User;
use App\Models\KhoaPhong;
use App\Models\KiemDinhModel;
use App\Models\LoaiThietBi;
use App\Models\NhaCungCapModel;
use App\Models\NhomThietBi;
use App\Models\ThietBiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThietBiController extends Controller
{
    private $thietBi;
    private $loaiThietBi;
    private $nhomThietBi;
    private $khoaPhong;
    private $nhaCungCap;
    private $donViBaoTri;
    private $kiemDinh;


    public function __construct(
        ThietBiModel $thietBi,
        NhomThietBi $nhomThietBi,
        LoaiThietBi $loaiThietBi,
        KhoaPhong $khoaPhong,
        NhaCungCapModel $nhaCungCap,
        DonViBaoTriModel $donViBaoTri,
        KiemDinhModel $kiemDinh
    ) {
        $this->thietBi = $thietBi;
        $this->loaiThietBi = $loaiThietBi;
        $this->nhomThietBi = $nhomThietBi;
        $this->khoaPhong = $khoaPhong;
        $this->nhaCungCap = $nhaCungCap;
        $this->donViBaoTri = $donViBaoTri;
        $this->kiemDinh = $kiemDinh;
    }

    public function listAll()
    {
        $data['listAll'] = $this->thietBi->all();
        $data['count'] = $this->thietBi->count();
        $data['loaiThietBi'] = $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listAll', $data);
    }

    public function listChuaBanGiao()
    {
        $data['listAll'] = $this->thietBi->where('tinhTrang', 1)->get();
        $data['count'] = $this->thietBi->where('tinhTrang', 1)->count();
        $data['loaiThietBi'] = $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listChuaBanGiao', $data);
    }

    public function listDangSuDung()
    {
        $data['listAll'] = $this->thietBi->where('tinhTrang', 2)->get();
        $data['count'] = $this->thietBi->where('tinhTrang', 2)->count();
        $data['loaiThietBi'] = $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listDangSuDung', $data);
    }

    public function listBaoHong()
    {
        $data['listAll'] = $this->thietBi->where('tinhTrang', 3)->get();
        $data['count'] = $this->thietBi->where('tinhTrang', 3)->count();
        $data['loaiThietBi'] = $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listDangBaoHong', $data);
    }

    public function listDangSuaChua()
    {
        $data['listAll'] = $this->thietBi->where('tinhTrang', 4)->get();
        $data['count'] = $this->thietBi->where('tinhTrang', 4)->count();
        $data['loaiThietBi'] = $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listDangSuaChua', $data);
    }

    public function listNgungSuDung()
    {
        $data['listAll'] = $this->thietBi->where('tinhTrang', 5)->get();
        $data['count'] = $this->thietBi->where('tinhTrang', 5)->count();
        $data['loaiThietBi'] = $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listNgungSuDung', $data);
    }

    public function listThanhLy()
    {
        $data['listAll'] = $this->thietBi->where('tinhTrang', 6)->get();
        $data['count'] = $this->thietBi->where('tinhTrang', 6)->count();
        $data['loaiThietBi'] = $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listThanhLy', $data);
    }

    public function searchAll(Request $request)
    {
        $data['khoaPhong'] = $this->khoaPhong->all();
        if ($request->khoaPhongSuDung != null && $request->dataSearch != null) {
            $data['rs'] = $this->thietBi
                ->where('model', 'like', '%' . $request->dataSearch . '%')
                ->orwhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
                ->orwhere('serial', 'like', '%' . $request->dataSearch . '%')
                ->where('idKhoaPhongSuDung', $request->khoaPhongSuDung)->get();
            $data['count'] = $data['rs']->count();
            return view('ThietBi.listAll', $data);
        } elseif ($request->khoaPhongSuDung == null) {
            $data['rs'] = $this->thietBi->where('model', 'like', '%' . $request->dataSearch . '%')
                ->orWhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
                ->orWhere('serial', 'like', '%' . $request->dataSearch . '%')->get();
            $data['count'] = $data['rs']->count();
            return view('ThietBi.listAll', $data);
        } elseif ($request->dataSearch == null) {
            $data['rs'] = $this->thietBi->Where('idKhoaPhongSuDung', $request->khoaPhongSuDung)->get();
            $data['count'] = $data['rs']->count();
            return view('ThietBi.listAll', $data);
        }
    }

    public function searchChuaBanGiao(Request $request)
    {
        $data['rs'] = $this->thietBi
            ->where('model', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('serial', 'like', '%' . $request->dataSearch . '%')->get();
        return view('ThietBi.listChuaBanGiao', $data);
    }

    public function searchDangSuDung(Request $request)
    {
        $data['khoaPhong'] = $this->khoaPhong->all();
        if ($request->khoaPhongSuDung != null && $request->dataSearch != null) {
            $data['rs'] = $this->thietBi
                ->where('model', 'like', '%' . $request->dataSearch . '%')
                ->orwhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
                ->orwhere('serial', 'like', '%' . $request->dataSearch . '%')
                ->where('idKhoaPhongSuDung', $request->khoaPhongSuDung)->get();

            return view('ThietBi.listDangSuDung', $data);
        } elseif ($request->khoaPhongSuDung == null) {
            $data['rs'] = $this->thietBi
                ->where('model', 'like', '%' . $request->dataSearch . '%')
                ->orWhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
                ->orWhere('serial', 'like', '%' . $request->dataSearch . '%')->get();

            return view('ThietBi.listDangSuDung', $data);
        } elseif ($request->dataSearch == null) {
            $data['rs'] = $this->thietBi
                ->Where('idKhoaPhongSuDung', $request->khoaPhongSuDung)->get();

            return view('ThietBi.listDangSuDung', $data);
        }
    }


    public function searchBaoHong(Request $request)
    {
        $data['rs'] = $this->thietBi
            ->where('model', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('serial', 'like', '%' . $request->dataSearch . '%')->get();

        return view('ThietBi.listDangBaoHong', $data);
    }

    public function searchDangSuaChua(Request $request)
    {
        $data['rs'] = $this->thietBi
            ->where('model', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('serial', 'like', '%' . $request->dataSearch . '%')->get();

        return view('ThietBi.listDangSuaChua', $data);
    }

    public function searchNgungSuDung(Request $request)
    {
        $data['rs'] = $this->thietBi
            ->where('model', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('serial', 'like', '%' . $request->dataSearch . '%')->get();
        return view('ThietBi.listNgungSuDung', $data);
    }

    public function searchThanhLy(Request $request)
    {
        $data['rs'] = $this->thietBi
            ->where('model', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('tenThietBi', 'like', '%' . $request->dataSearch . '%')
            ->orWhere('serial', 'like', '%' . $request->dataSearch . '%')->get();
        return view('ThietBi.listThanhLy', $data);
    }


    public function getAdd()
    {
        if (Auth::user()->phanQuyen != 2) {
            $data['loaiThietBi'] = $this->loaiThietBi->all();
            $data['nhomThietBi'] = $this->nhomThietBi->all();
            $data['nhaCungCap'] = $this->nhaCungCap->all();
            $data['donViBaoTri'] = $this->donViBaoTri->all();
            $data['kiemDinh'] = $this->kiemDinh->all();
            return view('ThietBi.add', $data);
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postAdd(Request $request)
    {
        $this->thietBi->create($request->all());
        return redirect('/admin/thietbi/listAll')->with('add', 'Thêm mới thành công');
    }

    public function delete($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $data = $this->thietBi->find($id)->delete();
            return redirect('/admin/thietbi/listAll')->with('delete', 'Xóa thiết bị thành công');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen != 2) {
            $rs['data'] = $this->thietBi->find($id);
            $rs['nhomThietBi'] = $this->nhomThietBi->all();
            $rs['kiemDinh'] = $this->kiemDinh->all();
            $rs['nhaCungCap'] = $this->nhaCungCap->all();
            return view('ThietBi.edit', $rs);
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postEdit(ThietBiEditRequest $request, $id)
    {
        $data = $this->thietBi->find($id);
        $data->update($request->all());
        return redirect('/admin/thietbi/listAll')->with('update', 'Chỉnh sửa thành công');
    }

    public function getBanGiao($id)
    {
        if(Auth::user()->phanQuyen != 2){
        $data['khoaPhong'] = $this->khoaPhong->all();
        $data['id'] = $id;
        return view('ThietBi.BanGiao', $data);}else{
            return back()->with('quyen','Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postBanGiao($id, Request $request)
    {
        $data = $this->thietBi->find($id);
        $data->maCanBoKhoaPhongPhuTrach = $request->maCanBoKhoaPhongPhuTrach;
        $data->idKhoaPhongSuDung = $request->idKhoaPhongSuDung;
        $data->tinhTrang = 2;
        $data->save();
        return redirect('/admin/thietbi/listDangSuDung')->with('banGiao', 'Bàn giao thiết bị thành công');
    }

    public function thanhLy($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $data = $this->thietBi->find($id);
            $data->tinhTrang = 6;
            $data->save();
            return redirect('/admin/thietbi/listThanhLy')->with('thanhly', 'Thanh lý thiết bị thành công');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function getHoSo($id){
        $data = $this->thietBi->find($id);
        return view('ThietBi.HoSo',compact('data'));
    }
}
