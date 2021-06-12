<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuaChuaModel extends Model
{
    use HasFactory;
    protected $table = "suachua";
    protected $fillable = [
        'thietbi_id', 'nghiemThu', 'ngaySuaChua', 'ngaySuaXong',
        'trangThaiTruocKhiSua', 'trangThaiSauKhiSua', 'chiPhi'
    ];
    public function NghiemThu()
    {
        return $this->belongsTo(NghiemThuModel::class, 'nghiemThu');
    }

    public function ThietBiSuaChua()
    {
        return $this->belongsTo(ThietBiModel::class, 'thietbi_id');
    }
}
