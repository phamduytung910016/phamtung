<?php

namespace App\Http\Controllers;

use App\Models\BaoHongModel;
use App\Models\ThietBiModel;
use App\Models\User;
use App\Notifications\SendMailRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaoHongController extends Controller
{

    private $baoHong;
    private $thietBi;
    private $user;

    public function __construct(ThietBiModel $thietBi, BaoHongModel $baoHong , User $user)
    {
        $this->baoHong = $baoHong;
        $this->thietBi = $thietBi;
        $this->user = $user;
    }

    public function index()
    {
        $data = $this->baoHong->all();
        return view('BaoHongThietBi.list', compact('data'));
    }

    public function getAdd($id)
    {
        if (Auth::user()->phanQuyen != 3) {
            $data = $this->thietBi->find($id);
            return view('BaoHongThietBi.report', compact('data'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postAdd(Request $request, $id)
    {

        $thietBiHong = $this->thietBi->find($id);
        $thietBiHong->tinhTrang = 3;
        $thietBiHong->save();
        $baoHong = $this->baoHong;
        $baoHong->maNguoiBaoHong = Auth::user()->maNguoiDung;
        $baoHong->lyDo = $request->lyDo;
        $baoHong->ngayBaoHong = $request->ngayBaoHong;
        $baoHong->thietbi_id = $id;
        $baoHong->save();
        $user = $this->user->where('maNguoiDung','20182876')->first();
        $user->notify(new SendMailRequest());
        return redirect('/admin/baohong/list')->with('add', 'Báo hỏng thiết bị thành công');
    }

    public function delete($id)
    {
        if (Auth::user()->phanQuyen != 2) {
            $data = $this->baoHong->find($id);
            $thietBi = $this->thietBi->find($data->thietbi_id);
            $thietBi->tinhTrang = 2;
            $thietBi->save();
            $data->delete();
            return redirect('/admin/baohong/list')->with('delete', 'Xóa thành công');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }
}
