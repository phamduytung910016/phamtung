<?php

namespace App\Http\Controllers;

use App\Models\KhoaPhong;
use App\Models\ThietBiHong;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        $khoaPhong = KhoaPhong::all()->count();
        $thietBiHong = ThietBiHong::all()->count();
        return view('home', compact('user', 'khoaPhong', 'thietBiHong'));
    }
}
