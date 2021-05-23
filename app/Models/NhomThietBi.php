<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhomThietBi extends Model
{
    use HasFactory;
    protected $table = "nhomthietbi";
    protected $fillable = ['tenNhomThietBi', 'maNhomThietBi'];
    public function LoaiThietBi()
    {
        return $this->hasMany(LoaiThietBi::class, 'maNhomThietBi', 'maNhomThietBi');
    }
}
