<?php

namespace App\Models;

use App\Models\KhoaPhong;
use Illuminate\Contracts\Translation\HasLocalePreference;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;
    use HasFactory;
    protected $table = "user";
    protected $fillable = ['hoVaTen', 'email', 'password', 'soDienThoai', 'phanQuyen', 'khoaPhong_id', 'diaChi', 'maNguoiDung'];
    public function khoaPhong()
    {
        return $this->belongsTo(KhoaPhong::class, 'khoaPhong_id');
    }
}
