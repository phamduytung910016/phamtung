<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Http\Requests\UserLogInRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(UserLogInRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin');
        } else {
            return back()->with('thongbao', 'Tài khoản không có trong cơ sở dữ liệu');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }

    // public function logOut()
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }
}
