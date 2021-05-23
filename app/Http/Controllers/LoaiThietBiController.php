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

    public function index(){
        $data['loaiThietBis'] = $this->loaiThietBi->paginate(8);
        $data['nhomThietBis'] = $this->nhomThietBi->all();

        return view('LoaiThietBi.list',$data);

    }

    public function getAdd(){
        if (Auth::user()->phanQuyen == 1) {
            $data['nhomThietBis'] = $this->nhomThietBi->all();
            return view('LoaiThietBi.add',$data);
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này ');
        }
    }

    public function postAdd(LoaiThietBiRequest $request){


    }

    public function getEdit(){}

    public function postEdit(){}

    public function search(){}
}
