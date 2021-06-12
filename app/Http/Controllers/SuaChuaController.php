<?php

namespace App\Http\Controllers;

use App\Models\BaoHongModel;
use App\Models\NghiemThuModel;
use App\Models\SuaChuaModel;
use App\Models\ThietBiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuaChuaController extends Controller
{
    private $thietBi;
    private $lichSuaChua;
    private $nghiemThu;
    private $baoHong;

    public function __construct(ThietBiModel $thietBi, SuaChuaModel $lichSuaChua, NghiemThuModel $nghiemThu, BaoHongModel $baoHong)
    {
        $this->thietBi = $thietBi;
        $this->lichSuaChua = $lichSuaChua;
        $this->nghiemThu = $nghiemThu;
        $this->baoHong = $baoHong;
    }

    public function index()
    {
        $data = $this->lichSuaChua->all();
        return view('SuaChuaThietBi.list', compact('data'));
    }

    public function getAdd($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $data['nghiemThu'] = $this->nghiemThu->all();
            $data['baoHong'] = $this->baoHong->find($id);
            return view('SuaChuaThietBi.add', $data);
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postAdd(Request $request, $id)
    {
        $baoHong = $this->baoHong->find($id);
        if ($baoHong) {
            $thietBiSuaChua = $this->thietBi->find($baoHong->thietbi_id);
            $thietBiSuaChua->tinhTrang = 4;
            $lichSuaChua = $this->lichSuaChua;
            $lichSuaChua->thietbi_id = $thietBiSuaChua->id;
            $lichSuaChua->nghiemThu = $request->nghiemThu;
            $lichSuaChua->ngaySuaChua = $request->ngaySuaChua;
            $lichSuaChua->ngaySuaXong = $request->ngaySuaXong;
            $lichSuaChua->trangThaiTruocKhiSua = $request->trangThaiTruocKhiSua;
            $lichSuaChua->trangThaiSauKhiSua = $request->trangThaiSauKhiSua;
            $lichSuaChua->chiPhi = $request->chiPhi;
            $lichSuaChua->maNguoiLapPhieu = Auth::user()->maNguoiDung;
            $baoHong->delete();
            $thietBiSuaChua->save();
            $lichSuaChua->save();
            return redirect('/admin/suachua/list')->with('add', 'Lập kế hoạch sửa chữa thành công');
        }
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen == 1) {
            $data['lichSuaChua'] = $this->lichSuaChua->find($id);
            $data['nghiemThu'] = $this->nghiemThu->all();
            return view('SuaChuaThietBi.edit', $data);
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postEdit(Request $request, $id)
    {
        $lichSuaChua = $this->lichSuaChua->find($id);
        $lichSuaChua->nghiemThu = $request->nghiemThu;
        $lichSuaChua->ngaySuaChua = $request->ngaySuaChua;
        $lichSuaChua->ngaySuaXong = $request->ngaySuaXong;
        $lichSuaChua->trangThaiTruocKhiSua = $request->trangThaiTruocKhiSua;
        $lichSuaChua->trangThaiSauKhiSua = $request->trangThaiSauKhiSua;
        $lichSuaChua->chiPhi = $request->chiPhi;
        $lichSuaChua->save();
        return redirect('/admin/suachua/list')->with('update', 'Cập nhật thành công');
    }

    public function getBanGiao($id)
    {
        $data = $this->lichSuaChua->find($id);
        return view('SuaChuaThietBi.BanGiao', compact('data'));
    }
    public function postBanGiao($id)
    {
        $data = $this->lichSuaChua->find($id);
        $thietBi = $this->thietBi->find($data->thietbi_id);
        if ($data->nghiemThu == 4) {
            $thietBi->tinhTrang = 2;
            $thietBi->save();
            $data->delete();
            return redirect('/admin/thietbi/listDangSuDung')->with('suachua', 'Bàn giao lại thiết bị thành công');
        } elseif ($data->nghiemThu == 5) {
            $thietBi->tinhTrang = 5;
            $thietBi->save();
            $data->delete();
            return redirect('/admin/thietbi/listNgungSuDung')->with('add', 'Thêm mới thành công');
        }
    }
}
