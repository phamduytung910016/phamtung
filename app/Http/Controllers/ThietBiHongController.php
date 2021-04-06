<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThietBiHongRequest;
use App\Models\ThietBiHong;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThietBiHongController extends Controller
{
    protected $thietBiHong;

    public function __construct(ThietBiHong $thietBiHong)
    {
        return $this->thietBiHong = $thietBiHong;
    }


    public function index()
    {
        $data = $this->thietBiHong->all();
        return view('BaoHongThietBi.list', compact('data'));
    }


    public function search(Request $request)
    {
        $searchs = $this->thietBiHong->where('tenThietBi', 'like', '%' . $request->searchThietBiHong . '%')
            ->orWhere('serial', 'like', '%' . $request->searchThietBiHong . '%')
            ->orWhere('model', 'like', '%' . $request->searchThietBiHong . '%')
            ->orWhere('maThietBi', 'like', '%' . $request->searchThietBiHong . '%')->get();
        return view('BaoHongThietBi.list', compact('searchs'));
    }


    public function getAdd()
    {
        if (Auth::user()->phanQuyen != 3) {
            return view('BaoHongThietBi.report');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }


    public function postAdd(ThietBiHongRequest $request)
    {
        $this->thietBiHong->create($request->all());
        //return redirect('/admin/thietbihong')->with('add', 'Thêm thành công');
        //return về url nơi xử lý việc gửi mail
        $url = '/admin/thietbihong/send-mail';
        return redirect($url);
    }

    public function delete($id)
    {
        if (Auth::user()->phanQuyen != 2) {
            $thietBiHong = $this->thietBiHong->find($id);
            $thietBiHong->delete();
            return redirect('/admin/thietbihong')->with('delete', 'Xóa thành công');
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function getEdit($id)
    {
        if (Auth::user()->phanQuyen != 2) {
            $thietBiHong = $this->thietBiHong->find($id);
            return view('BaoHongThietBi.edit', compact('thietBiHong'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }

    public function postEdit(Request $request, $id)
    {
        $thietBiHong =  $this->thietBiHong->find($id);
        $thietBiHong->update($request->all());
        return redirect('/admin/thietbihong')->with('update', 'Cập nhật thành công');
    }
}
