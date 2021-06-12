<?php

namespace App\Http\Controllers;

use App\Models\DonViBaoTriModel;
use App\Models\LoaiThietBi;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getLoaiThietBi($idNhomThietBi)
    {
        $loaiThietBi = LoaiThietBi::where('maNhomThietBi', $idNhomThietBi)->get();
        foreach ($loaiThietBi as $ltb) {
            echo "<option value='$ltb->maLoaiThietBi'>$ltb->tenLoaiThietBi</option>";
        }
    }
    public function getDonViBaoTri($idNhaCungCap)
    {
        $donViBaoTri = DonViBaoTriModel::where('nhaCungCap_id', $idNhaCungCap)->get();
        foreach ($donViBaoTri as $item) {
            echo "<option value='$item->id'>$item->tenDonViBaoTri</option>";
        }
    }
    public function getUser($idKhoaPhong)
    {
        $users = User::where('khoaPhong_id', $idKhoaPhong)->get();
        foreach ($users as $user) {
            echo "<option value='$user->maNguoiDung'>$user->hoVaTen</option>";
        }
    }

}
