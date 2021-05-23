<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatTuKemTheo extends Model
{
    use HasFactory;
    protected $table = 'vattukemtheo';
    protected $fillable = ['tenVatTu', 'maVatTu', 'maThietBiTuongUng', 'donViTinh', 'soLuong', 'trangThai'];

    public function ThietBi()
    {
        return $this->belongsTo(ThietBiModel::class, 'maThietBi', 'maThietBiTuongUng');
    }
}
