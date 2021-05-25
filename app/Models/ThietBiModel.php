<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThietBiModel extends Model
{
    use HasFactory;
    protected $table = "ThietBi";
    protected $fillable = [
        'tenThietBi', 'serial', 'model', 'maThietBi', 'maLoaiThietBi','maNhomThietBi', 'mucDoRuiRo', 'donViTinh', 'soLuong', 'tinhTrang', 'canBoVatTuPhuTrach','canBoKhoaPhongPhuTrach',
        'khoaPhongSuDung', 'nhaCungCap', 'donViBaoTri', 'hangSanXuat', 'xuatXu', 'namSanXuat', 'kiemDinhDinhKy', 'ngayKiemDinhLanDau',
        'ngayNhapKho', 'ngayHetHanBaoHanh', 'thongSoKyThuat', 'cauHinhKyThuat', 'giaTriBanDau', 'khauHaoHangNam', 'giaTriHienTai','namSuDung'
    ];

    public function LoaiThietBi(){
        return $this->belongsTo(LoaiThietBi::class , 'maLoaiThietBi','maLoaiThietBi');
    }


}
