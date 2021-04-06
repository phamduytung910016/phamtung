<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThietBiHong extends Model
{
    use HasFactory;
    protected $table = "bangthietbihong";
    protected $fillable = ['tenThietBi', 'tenNguoiDung', 'khoaPhong', 'serial', 'model', 'maThietBi', 'ghiChu', 'ngayGui', 'trangThai'];
}
