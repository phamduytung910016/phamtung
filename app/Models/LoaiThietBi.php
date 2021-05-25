<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiThietBi extends Model
{
    use HasFactory;
    protected $table = "loaithietbi";
    protected $fillable = ['maLoaiThietBi', 'tenLoaiThietBi', 'maNhomThietBi'];
    public function NhomThietBi()
    {
        return $this->belongsTo(NhomThietBi::class, 'maNhomThietBi', 'maNhomThietBi');
    }

    public function ThietBi()
    {
        return $this->hasMany(ThietBiModel::class, 'maLoaiThietBi', 'maLoaiThietBi');
    }
}
