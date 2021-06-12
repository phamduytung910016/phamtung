<?php

namespace App\Http\Controllers;

use App\Console\Commands\SendMail;
use App\Models\BaoHongModel;
use App\Models\KhoaPhong;
use App\Models\SuaChuaModel;
use App\Models\ThietBiHong;
use App\Models\ThietBiModel;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['user'] = User::all()->count();
        $data['khoaPhong'] = KhoaPhong::all()->count();
        $data['thietBiChuaBanGiao'] = ThietBiModel::where('tinhTrang', 1)->count();
        $data['thietBiDangSuDung'] = ThietBiModel::where('tinhTrang', 2)->count();
        $data['thietBiBaoHong'] = ThietBiModel::where('tinhTrang', 3)->count();
        $data['thietBiSuaChua'] = ThietBiModel::where('tinhTrang', 4)->count();
        $data['thietBiNgungSuDung'] = ThietBiModel::where('tinhTrang', 5)->count();
        $data['thietBiThanhLy'] = ThietBiModel::where('tinhTrang', 6)->count();
        return view('home', $data);
    }
}
