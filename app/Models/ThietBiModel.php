<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThietBiModel extends Model
{
    use HasFactory;
    protected $table = "ThietBi";
    protected $fillable = [
        'tenThietBi', 'serial', 'model', 'maThietBi', 'maLoaiThietBi', 'ruiRo', 'donViTinh', 'soLuong', 'tinhTrang', 'canBoPhuTrach',
        'canBoSuDung', 'khoaPhongSuDung', 'nhaCungCap', 'donViBaoTri', 'hangSanXuat', 'xuatXu', 'namSanXuat', 'kiemDinhDinhKy', 'ngayKiemDinhLanDau',
        'ngayNhapKho', 'ngayHetHanBaoHanh', 'thongSoKyThuat', 'cauHinhKyThuat', 'giaTriBanDau', 'khauHaoHangNam', 'namSuDung'
    ];

}
