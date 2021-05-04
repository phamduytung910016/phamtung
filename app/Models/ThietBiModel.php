<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThietBiModel extends Model
{
    use HasFactory;
    protected $table = "thietbi";
    protected $fillable = [
        'tenThietBi', 'serial', 'model', 'maLoaiThietBi', 'ruiRo', 'donViTinh', 'soLuong', 'tinhTrang', 'canBoPhuTrach_id',
        'canBoSuDung_id', 'khoaPhongSuDung_id', 'nhaCungCap_id', 'donViBaoTri_id', 'hangSanXuat', 'xuatXu', 'namSanXuat', 'kiemDinhDinhKy', 'ngayKiemDinhLanDau',
        'ngayNhapKho', 'ngayHetHanBaoHanh', 'thongSoKyThuat', 'cauHinhKyThuat', 'giaTriBanDau', 'khauHaoHangNam', 'namSuDung'
    ];
    public function CanBoSuDung()
    {
        return $this->belongsTo(User::class, 'canBoSuDung_id');
    }
    public function CanBoPhuTrach()
    {
        return $this->belongsTo(User::class, 'canBoSuDung_id');
    }
    public function KhoaPhongSuDung()
    {
        return $this->belongsTo(KhoaPhong::class, 'khoaPhongSuDung_id');
    }
    public function NhaCungCap()
    {
        return $this->belongsTo(NhaCungCapModel::class, 'nhaCungCap_id');
    }
    public function DonViBaoTri()
    {
        return $this->belongsTo(DonViBaoTriModel::class, 'donViBaoTri_id');
    }
}
