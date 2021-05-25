<?php

namespace App\Http\Controllers;

use App\Models\KhoaPhong;
use App\Models\LoaiThietBi;
use App\Models\NhomThietBi;
use App\Models\ThietBiModel;
use App\Models\User;
use Illuminate\Http\Request;

class ThietBiController extends Controller
{


    private $thietBi;
    private $loaiThietBi;
    private $nhomThietBi;
    private $khoaPhong;


    public function __construct(ThietBiModel $thietBi, NhomThietBi $nhomThietBi, LoaiThietBi $loaiThietBi,KhoaPhong $khoaPhong)
    {
        $this->thietBi = $thietBi;
        $this->loaiThietBi = $loaiThietBi;
        $this->nhomThietBi = $nhomThietBi;
        $this->khoaPhong = $khoaPhong;
    }

    public function listAll()
    {
        $data['listAll']= $this->thietBi->all();
        $data['count']= $this->thietBi->count();
        $data['loaiThietBi']= $this->loaiThietBi->all();
        $data['nhomThietBi'] = $this->nhomThietBi->all();
        $data['khoaPhong'] = $this->khoaPhong->all();
        return view('ThietBi.listAll',$data);
    }

    public function listChuaBanGiao()
    {
    }

    public function listDangSuDung()
    {
    }

    public function listBaoHong()
    {
    }

    public function listDangSuaChua()
    {
    }

    public function listDaNgungSuDung()
    {
    }

    public function search(Request $request)
    {
    }

    public function getAdd()
    {
    }

    public function postAdd($request)
    {
    }

    public function delete($id)
    {
    }

    public function getEdit($id)
    {
    }

    public function postEdit(Request $request, $id)
    {
    }
}
