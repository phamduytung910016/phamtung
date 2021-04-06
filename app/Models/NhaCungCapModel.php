<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCapModel extends Model
{
    use HasFactory;
    protected $table = 'nhacungcap';
    protected $fillable = ['tenNhaCungCap','nguoiDaiDien','email','soDienThoai','diaChi','maSoThue','ghiChu'];
}
