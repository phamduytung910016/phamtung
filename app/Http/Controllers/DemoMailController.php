<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendMailRequest;
use Illuminate\Http\Request;

class DemoMailController extends Controller
{
    public function sendMail()
    {
        //lấy ra những email trong bảng người dùng cần gửi
        $user = User::find(15);
        //tạo notification
        $user->notify(new SendMailRequest());
        return redirect('/admin/thietbihong/')->with('add', 'Thêm mới thành công');
    }
}
