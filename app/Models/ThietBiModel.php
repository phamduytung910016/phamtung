<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThietBiModel extends Model
{
    use HasFactory;
    protected $table = "ThietBi";
    protected $fillable = [
        'tenThietBi', 'serial', 'model', 'maThietBi', 'maLoaiThietBi', 'maNhomThietBi', 'mucDoRuiRo', 'donViTinh', 'soLuong', 'tinhTrang', 'maCanBoVatTuPhuTrach', 'maCanBoKhoaPhongPhuTrach',
        'idKhoaPhongSuDung', 'idNhaCungCap', 'idDonViBaoTri', 'hangSanXuat', 'xuatXu', 'namSanXuat', 'kiemDinhDinhKy', 'ngayKiemDinhLanDau',
        'ngayNhapKho', 'ngayHetHanBaoHanh', 'thongSoKyThuat', 'cauHinhKyThuat', 'giaTriBanDau', 'khauHaoHangNam', 'giaTriHienTai', 'namSuDung'
    ];

    public function LoaiThietBi()
    {
        return $this->belongsTo(LoaiThietBi::class, 'maLoaiThietBi', 'maLoaiThietBi');
    }

    public function CanBoPhuTrach($maNguoiDung)
    {
        $rs = User::where('maNguoiDung', $maNguoiDung)->first();
        return $rs;
    }

    public function CanKhoaPhongPhuTrach($maNguoiDung)
    {
        $rs = User::where('maNguoiDung', $maNguoiDung)->first();
        return $rs;
    }

    public function KhoaPhongSuDung()
    {
        return $this->belongsTo(KhoaPhong::class, 'idKhoaPhongSuDung');
    }

    public function NhaCungCap()
    {
        return $this->belongsTo(NhaCungCapModel::class, 'idNhaCungCap');
    }

    public function TinhTrang()
    {
        return $this->belongsTo(TinhTrangModel::class, 'tinhTrang');
    }

    public function KiemDinh()
    {
        return $this->belongsTo(KiemDinhModel::class, 'kiemDinhDinhKy');
    }
}
